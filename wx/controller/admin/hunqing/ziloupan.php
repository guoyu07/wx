<?php
$wid = Session::get('wid');
$m = new Model('micro_hunqing_ziloupan');

if('del'==Request::get(1)){
	$ids = explode(',', Request::post('id'));
	foreach ($ids as $id){
		$lbs = new Model('micro_hunqing_ziloupan');
		$lbs->find($id);
		if($lbs->wid==Session::get('wid')){
			$lbs->remove();
		}
	}
	Response::write('ok');
}else{

	$tj = new SampleModel();
	$where = $tj->load_array_from_get();
	$where['wid'] = $wid;
	if(trim($where['name']!='')){
		$where['name@~'] = $where['name'];
	}
	unset($where['name']);
	
	$p = new Pagination(100,10,false);
	$res = $p->model_list($m->where($where)->order('id desc'));
}