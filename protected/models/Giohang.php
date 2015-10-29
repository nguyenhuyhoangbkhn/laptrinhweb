<?php

/**
 * This is the model class for table "{{giohang}}".
 *
 * The followings are the available columns in table '{{giohang}}':
 * @property integer $id
 * @property integer $id_book
 * @property integer $id_user
 * @property string $name_book
 * @property integer $cost
 * @property integer $number
 * @property integer $status
 */
class Giohang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{giohang}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_book, id_user, name_book, cost, number, status', 'required'),
			array('id_book, id_user, cost, number, status', 'numerical', 'integerOnly'=>true),
			array('name_book', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_book, id_user, name_book, cost, number, status', 'safe', 'on'=>'search'),
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
			'id_book' => 'Id Book',
			'id_user' => 'Id User',
			'name_book' => 'Name Book',
			'cost' => 'Cost',
			'number' => 'Number',
			'status' => 'Status',
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
		$criteria->compare('id_book',$this->id_book);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('name_book',$this->name_book,true);
		$criteria->compare('cost',$this->cost);
		$criteria->compare('number',$this->number);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Giohang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
