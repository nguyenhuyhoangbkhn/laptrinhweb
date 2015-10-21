<?php

/**
 * This is the model class for table "{{book}}".
 *
 * The followings are the available columns in table '{{book}}':
 * @property integer $id
 * @property string $nxb
 * @property string $author
 * @property integer $km_id
 * @property string $name
 * @property integer $type
 * @property integer $cost
 * @property string $introduc
 * @property integer $namxb
 * @property integer $slnhap
 * @property integer $slcon
 */
class Book extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	private $_oldTags;
	public function tableName()
	{
		return '{{book}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nxb, author, km_id, name, type, cost, introduc, namxb, slnhap, slcon', 'required'),
			array('km_id, type, cost, namxb, slnhap, slcon', 'numerical', 'integerOnly'=>true),
			array('nxb, author', 'length', 'max'=>128),
			array('name', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nxb, author, km_id, name, type, cost, introduc, namxb, slnhap, slcon', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nxb' => 'Nxb',
			'author' => 'Author',
			'km_id' => 'Km',
			'name' => 'Name',
			'type' => 'Type',
			'cost' => 'Cost',
			'introduc' => 'Introduc',
			'namxb' => 'Namxb',
			'slnhap' => 'Slnhap',
			'slcon' => 'Slcon',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nxb',$this->nxb,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('km_id',$this->km_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('cost',$this->cost);
		$criteria->compare('introduc',$this->introduc,true);
		$criteria->compare('namxb',$this->namxb);
		$criteria->compare('slnhap',$this->slnhap);
		$criteria->compare('slcon',$this->slcon);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Book the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	protected function afterSave()
	{
		parent::afterSave();
		Tacgia::model()->updateFrequency($this->_oldTags, $this->author);
	}
}
