<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <title><?php echo $m->name; ?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="/res/dc/diancai.css" rel="stylesheet" type="text/css">
     <script src="/res/dc/cookie.js" type="text/javascript"></script>
    <script src="/res/dc/jquery.js" type="text/javascript"></script>
     <script>
var OAK = OAK || {};
OAK.Dom = {};
OAK.Shop = {};
OAK.Util = {};
OAK.Dom.setAttributes = function (el, prop) {
    for (var i in prop) {
        el.setAttribute(i, prop[i]);
    }
    return el;
}
OAK.Util.setProps = function (s, prop) {
    for (var i in prop) {
        s[i] = prop[i];
    }
    return s;
}
OAK.Util.isEqualInConditions = function (o, conditions) {
    for (var i in conditions) {
        if (o[i] != conditions[i]) {
            return false;
        }
    }
    return true;
}
OAK.Util.copy = function (o) {
    var res = new Object();
    for (var i in o) {
        res[i] = o[i];
    }
    return res;
}
OAK.Util.setParam = function (name, value) {
    localStorage.setItem(name, value);
}
OAK.Util.getParam = function (name) {
    return localStorage.getItem(name);
}
OAK.Shop.Product = function (prop) {
    var prod = {
        id: 0,
        name: "",
        specId: 0,
        price: 0.00,
        number: 0,
        categoryId: 0
    };
    return new OAK.Util.setProps(prod, prop);
}
OAK.Shop.Cart = function () {
    if (typeof OAK.Shop.Cart.single_instance === "undefined") {
        this._totalNumber = 0;
        this._totalAmount = 0.00;
        this._products = [];
        this.onBeforeAdd = null;
        this.onAfterAdd = null;
        this.onBeforeUpdate = null;
        this.onAfterUpdate = null;
        this.onBeforeDelete = null;
        this.onAfterDelete = null;
        OAK.Shop.Cart.single_instance = this;
    }
    return OAK.Shop.Cart.single_instance;
}
OAK.Shop.Cart.prototype = {
    specs: {1: "正辣", 2: "微辣", 3: "不辣"},
    categories:{"1":"\u5ddd\u83dc","2":"\u95fd\u83dc","3":"\u6e58\u83dc"},
total:50,
    saveToCache: function () {
        OAK.Util.setParam("ShoppingdiancaiCart1", JSON.stringify(this));
    },
    getFromCache: function () {
        var ShoppingdiancaiCart1 = OAK.Util.getParam("ShoppingdiancaiCart1");
        if (ShoppingdiancaiCart1 != null && ShoppingdiancaiCart1 != "") {
//alert(ShoppingdiancaiCart1);
            OAK.Util.setProps(this, JSON.parse(ShoppingdiancaiCart1));
        }
    },
    clear:function(){
        //localStorage.clear();
        OAK.Util.setParam("ShoppingdiancaiCart1",null);
        this._totalNumber = 0;
        this._totalAmount = 0.00;
        this._products = [];
    },
    addProduct: function (p, conditions) {
        this.onBeforeAdd !== null && this.onBeforeAdd(this, p, conditions);
        var _conditions = conditions || {id: p.id, specId: p.specId, ref: true};
        var alreadyExistProduct = this.getProduct(_conditions);
        var ret_num = 0;
        //一元鸭翅活动
        if(p.name == "一元鸭翅" && this.existProduct({name:p.name})){
            alert("每单只能购买一盒一元鸭翅");
            return;
        }
        if (alreadyExistProduct !== null){
            alreadyExistProduct.number += p.number;
        }
        else
            this._products.push(p);
        this._totalNumber += p.number;
        this._totalAmount += p.number * p.price;
        this.onAfterAdd !== null && this.onAfterAdd(this, alreadyExistProduct ? alreadyExistProduct.number : p.number, _conditions);
    },
    getQuantity: function () {
        return {totalNumber: this._totalNumber, totalAmount: this._totalAmount};
    },
    updateNumber: function (num, conditions) {
        this.onBeforeUpdate !== null && this.onBeforeUpdate(this, num, conditions);
        conditions.ref = true;
        var alreadyExistProduct = this.getProduct(conditions);
        if (alreadyExistProduct !== null) {
            this._totalNumber += (parseInt(num) - parseInt(alreadyExistProduct.number));
            this._totalAmount += ((parseInt(num) * parseFloat(alreadyExistProduct.price)) - parseInt(alreadyExistProduct.number) * parseFloat(alreadyExistProduct.price));
            alreadyExistProduct.number = num;
        }
        this.onAfterUpdate !== null && this.onAfterUpdate(this, alreadyExistProduct ? alreadyExistProduct.number : 0, conditions);
    },
    //获取购物车中的所有商品
    getProductList: function () {
        return this._products;
    },
    getProduct: function (conditions) {
        var ref = conditions.ref;
        delete conditions.ref;
        for (var i in this._products) {
            if (OAK.Util.isEqualInConditions(this._products[i], conditions))
                return ref ? this._products[i] : OAK.Util.copy(this._products[i]);
        }
        return null;
    },
    getProductNumber: function (conditions) {
        for (var i in this._products) {
            if (OAK.Util.isEqualInConditions(this._products[i], conditions))
                return this._products[i].number;
        }
        return null;
    },
    existProduct: function (conditions) {
        for (var i in this._products) {
            if (OAK.Util.isEqualInConditions(this._products[i], conditions))
                return true;
        }
        return false;
    },
    deleteProduct: function (conditions) {
        this.onBeforeDelete !== null && this.onBeforeDelete(this, conditions);
        for (var i in this._products) {
            if (OAK.Util.isEqualInConditions(this._products[i], conditions)) {
                this._totalNumber -= parseInt(this._products[i].number);
                this._totalAmount -= parseInt(this._products[i].number) * parseFloat(this._products[i].price);
                this._products.splice(i, 1);
                break;
            }
        }
        this.onAfterDelete !== null && this.onAfterDelete(this, conditions);
    },
    sortAsc:function(a,b){
        if(a.categoryId> b.categoryId){
            return 1;
        }else if(a.categoryId == b.categoryId){
            if(a.id> b.id)
                return 1;
            else if(a.id == b.id)
                return  a.specId> b.specId?1:-1;
            return -1;
        }
        return -1;
    }
}
</script>
 

 <script>
         
        function g(id) {
            return document.getElementById(id);
        }
 
    </script>
    

    <script>
var cart = new OAK.Shop.Cart();
function addProduct(productId, specId,name,price,categoryId,addnum) {
    cart.addProduct(OAK.Shop.Product({id: productId, specId: specId, number: addnum, price: price, name: name,categoryId:categoryId}));
}
function reduceProduct(productId, specId,num) {
    var oldnum = cart.getProductNumber({id: productId, specId: specId});
    if (oldnum !== null) {
        if (oldnum -num > 0) {
            cart.updateNumber(oldnum - num, {id: productId, specId: specId});
        } else {
            cart.deleteProduct({id: productId, specId: specId});
        }
    }
}
function showAll(){
    var dts = document.getElementsByTagName("dt");
    for(var i in dts){
        if(dts[i].innerText != null){
            dts[i].style.display = "";
            var dd = dts[i].nextElementSibling;
            while(dd != null && dd.tagName != 'DT' ){
                dd.style.display = "";
                dd = dd.nextElementSibling
            }
        }
    }
    showMenu(false);
}
function showProducts(categoryName){
    showAll();
    var dts = document.getElementsByTagName("dt");
    for(var i in dts){
        if(dts[i].innerText != null && dts[i].innerText != categoryName){
            dts[i].style.display = "none";
            var dd = dts[i].nextElementSibling;
            while(dd != null && dd.tagName != 'DT' ){
                dd.style.display = "none";
                dd = dd.nextElementSibling
            }
        }
    }
}
cart.showProductNum =  function(productId,specId,num){
    if(num>0){
        g("num_" + productId+"_"+specId).className = "count";
        g("del_" + productId+"_"+specId).style.display = "";
    }else{
        g("num_"  + productId+"_"+specId).className = "count_zero";
        g("del_"  + productId+"_"+specId).style.display = "none";
    }
    g("num_" + productId+"_"+specId).innerHTML = parseInt(num);
}
cart.showTotalNum = function(){
    var quant = cart.getQuantity();
   // g("cartN").innerHTML = ""+quant.totalNumber+"份 ￥"+quant.totalAmount;
   SetCookie("diancai1",quant.totalNumber);
g("cartN2").innerHTML = ""+quant.totalNumber;
};
cart.showCartInfo=function () {
    var products = cart.getProductList();
    for(var i in products){
        var product_id = products[i].id;
        var spec_id =  products[i].specId;

if(products[i].categoryId==1){
        cart.showProductNum(product_id, spec_id,cart.getProductNumber({id:product_id,specId:spec_id})||0);
}
    }
    cart.showTotalNum();
};
cart.onAfterAdd = function(obj,num,conditions){
    cart.showProductNum(conditions.id,conditions.specId,num);
    cart.showTotalNum();
    cart.saveToCache();
};
cart.onAfterUpdate = function(obj,num,conditions){
    cart.showProductNum(conditions.id,conditions.specId,num);
    cart.showTotalNum();
    cart.saveToCache();
};
cart.onAfterDelete = function(obj,conditions){
    cart.showProductNum(conditions.id,conditions.specId,0);
    cart.showTotalNum();
    cart.saveToCache();
};
/*cart.getFromCache();
cart.showCartInfo();*/
      
        function showMenu(is_show) {
            if (typeof(is_show) == "undefined") {
                if (hasClass(g("menu"), "sort_on"))
                    removeClass(g("menu"), "sort_on");
                else
                    addClass(g("menu"), "sort_on");
            } else {
                if (is_show) {
                    addClass(g("menu"), "sort_on");
                } else {
                    removeClass(g("menu"), "sort_on");
                }
            }
        }

        function hasClass(obj, cls) {
            return obj.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
        }

        function addClass(obj, cls) {
            if (!this.hasClass(obj, cls)) obj.className += " " + cls;
        }

        function removeClass(obj, cls) {
            if (hasClass(obj, cls)) {
                var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
                obj.className = obj.className.replace(reg, ' ');
            }
        }
        window.onload = function () {
// cart.categories = {"1":"\u5ddd\u83dc","2":"\u95fd\u83dc","3":"\u6e58\u83dc"};
 		  cart.total = 40;
            cart.getFromCache();
            cart.showCartInfo();
 setHeight();
        }

    </script>
<style>
</style>
</head>
<body class="mode_webapp">

<div class="menu_header"> 
     <div class="menu_topbar">
      <strong class="head-title">点菜</strong>
      <span class="head_btn_left"><a href="javascript:history.go(-1);"><span>返回</span></a><b></b></span>
      <a class="head_btn_right" href="<?php echo Conf::$http_path.'dc/index-'.$wid.'.html?wxid='.$_GET['wxid']; ?>">
      <span><i class="menu_header_home"></i></span><b></b>
      </a>
     </div>
</div>
 
  <input name="formhash" id="formhash" value="9fe25dd1" type="hidden">
<div id="mcover" onclick="document.getElementById('mcover').style.display='';">
<div id="Popup">
<div class="imgPopup">
    <img id="picsrc" src="/res/dc/qQQk5sy4bu.jpg"><h3 id="h3title"></h3>
    <p class="jianjie" id="jianjie"> </p></div>
</div>
    <a class="close" onclick="document.getElementById('mcover').style.display='';">X</a></div>	
<script>
//alert(GetCookie("sunshine"));
function htmlit(url,title,fid){
document.getElementById('mcover').style.display='block';
document.getElementById('Popup').style.display='block';
document.getElementById("picsr
c").src = url;
document.getElementById("h3title").innerHTML = title;
//document.getElementById("jianjie").innerHTML = jianjie;
 //$('#jianjie').load('index.php?ac=diancaimenu&id=650&shopid=1&c=o7MB9jtCnCf1wLBxlADC4kcO02Io&fid='+fid);
}
</script>
<div style="background-color:#FFF">
<div style="height: 566px;" id="navBar">
    	<dl>
            <dt>菜单</dt>
			 <?php foreach((array)$f as $b){ ?>
            <dd<?php echo $b->id==Request::get('2')?" class='active'":"";?>><a style="width:100%;" href="<?php echo "dc-".Request::get('1')."-".$b->id.".html?wxid=".$_GET['wxid'];?>#mp.weixin.qq.com">
			<?php echo $b->name; ?></a></dd>
                
			<?php  }?>
        </dl>
    </div>
    
    <div style="height: 566px;" id="infoSection">
<section class="menu">
    <section class="list listimg">
   <dl>
 
        <div class="ccbg">
			 <?php foreach((array)$d as $b){  ?>
    <dd>
        <span class="count_zero" id="num_<?php echo $b->id; ?>_1" onclick="addProduct('<?php echo $b->id; ?>','1','<?php echo $b->name; ?>','<?php echo $b->mianji; ?>','1',1);"></span>
        <div class="tupian">
		<img src="<?php $a = json_decode($b->pic,true); echo $a[0]['src']; ?>" onclick="htmlit('<?php echo $a[0]['src']; ?>','<?php echo $b->name; ?>',<?php echo $b->id; ?>)">
        <a href="javascript:addProduct('<?php echo $b->id; ?>','1','<?php echo $b->name; ?>','<?php echo $b->mianji; ?>','1',1);" class="add" data-foodid="<?php echo $b->id; ?>_1">
      	<h3><?php echo $b->name; ?></h3>
         <em><?php echo $b->mianji; ?>元<del><?php echo $b->mainji; ?>元</del></em>
        <p class="dpNum"></p></a> 
        <a href="javascript:reduceProduct('<?php echo $b->id; ?>','1',1);" class="reduce" id="del_<?php echo $b->id; ?>_1" style="display:none;" "><b class="ico_reduce">减一份</b></a>
		</div>
	</dd>              
			<?php  }?>
           </div>
    
    </dl>
    </section>
    <div class="copyright">© 2001-2013 <a href=""></a></div>
</section>

  
  
  
  
  
        </div>  
        
    <div class="clr"></div>  
</div>

<div class="footermenu">
    <ul>
        <li>
            <a href="<?php echo "index-".Request::get('1').".html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
            <img src="/res/dc/xxyX63YryG.png">
            <p>关于</p>
            </a>
        </li>
        <li>
            <a class="active" href="<?php echo "dc-".Request::get('1')."-1.html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
            <img src="/res/dc/Lngjm86JQq.png">
            <p>点菜</p>
            </a>
        </li>
        <li>
            <a href="<?php echo "gwc-".Request::get('1').".html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
             <span class="num" id="cartN2">0</span>
            <img src="/res/dc/2yFKO6TwKI.png">
            <p>购物车</p>
            </a>
        </li>
        <li>
            <a href="<?php echo "dd-".Request::get('1').".html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
            <img src="/res/dc/s22KaR0Wtc.png">
            <p>订单</p>
            </a>
        </li>
        <li>
            <a href="<?php echo "my-".Request::get('1').".html?wxid=".$_GET['wxid']."#";?>mp.weixin.qq.com">
            <img src="/res/dc/J0uZbXQWvJ.png">
            <p>我的</p>
            </a>
        </li>
    </ul>
</div>

<script type="text/javascript">


    function setHeight(){
        var  cHeight;
        cHeight = document.documentElement.clientHeight;
        cHeight = cHeight +"px"
        document.getElementById("navBar").style.height =  cHeight;
        document.getElementById("infoSection").style.height =  cHeight;
    }

 
    window.onresize = function(){setHeight();}


</script>
<script type="text/javascript">
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
WeixinJSBridge.call('hideToolbar');
});
</script>


</body></html>