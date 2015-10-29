<?php 
class wTop_nxb extends CWidget
{
	public function init(){
		parent::init();
		
	}
	public function run()
	{
		/*Top nxb*/
		$criteria = new CDbCriteria ();
		$criteria->limit = 3;
		$criteria->order = 'frequency desc';
		$list = Nxb::model()->findAll($criteria);		
		$this->render('top_nxb', array(
			'list'=>$list,			
		));
	}
}
?>