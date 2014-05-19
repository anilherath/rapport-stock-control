<?php

/**
 * This is the model class for table "items".
 *
 * The followings are the available columns in table 'items':
 * @property integer $item_id
 * @property integer $company_id
 * @property string $part_number
 * @property string $name
 * @property string $description
 * @property string $barcode
 * @property string $location_room
 * @property string $location_row
 * @property string $location_column
 * @property string $location_shelf
 * @property integer $category_id
 * @property double $current_quantity
 * @property double $available_quantity
 * @property double $recommended_lowest_quantity
 * @property double $recommended_highest_quantity
 * @property string $remarks
 * @property integer $active
 * @property string $image_url
 * @property double $sale_price
 * @property string $factory_due_date
 * @property integer $suppliers_id
 * @property string $fits_in_model
 * @property string $created
 * @property string $modified
 * @property string $deleted
 *
 * The followings are the available model relations:
 * @property InboundItemsHistory[] $inboundItemsHistories
 * @property ItemOnOrder[] $itemOnOrders
 * @property Suppliers $suppliers
 * @property OutboundItemsHistory[] $outboundItemsHistories
 * @property PurchaseOrder[] $purchaseOrders
 */
class Items extends CActiveRecord
{
	
	public $supplier_name;
	/**
	 * Returns the static model of the specified AR class.
	 * @return Items the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'items';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('part_number, name, current_quantity, available_quantity', 'required'),
			array('company_id, category_id, active, suppliers_id', 'numerical', 'integerOnly'=>true),
			array('current_quantity, available_quantity, recommended_lowest_quantity, recommended_highest_quantity, sale_price', 'numerical'),
			array('part_number', 'length', 'max'=>255),
			array('location_room, location_row, location_column, location_shelf, image_url, factory_due_date, fits_in_model, created, modified, deleted', 'safe'),
			
		
			//customised rulers. 
			array('available_quantity, current_quantity', 'nonzero'),
			array('part_number,barcode','unique','message'=>'{attribute}:{value} already exists!'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('supplier_name, item_id, company_id, part_number, name, description, barcode, location_room, location_row, location_column, location_shelf, category_id, current_quantity, available_quantity, recommended_lowest_quantity, recommended_highest_quantity, remarks, image_url, sale_price, factory_due_date, suppliers_id, fits_in_model', 'safe', 'on'=>'search'),

			);
	}
	
	public function nonzero($attribute,$params)
    {    
        if($this->$attribute<0)
            $this->addError($attribute,$attribute.' can not be less than zero.');
    }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'inboundItemsHistories' => array(self::HAS_MANY, 'InboundItemsHistory', 'main_item_id'),
			'itemOnOrders' => array(self::HAS_MANY, 'ItemOnOrder', 'items_id'),
			'suppliers' => array(self::BELONGS_TO, 'Suppliers', 'suppliers_id'),
			'outboundItemsHistories' => array(self::HAS_MANY, 'OutboundItemsHistory', 'main_item_id'),
			'purchaseOrders' => array(self::HAS_MANY, 'PurchaseOrder', 'items_item_id'),
		);
	}
	
	protected function beforeSave()
	{
		
		
		if(parent::beforeSave())
		{
			
			$this->company_id=0;
			$this->category_id=0;
			//$this->active=1;
			$this->factory_due_date=strtotime($this->factory_due_date);
			
			
			if($this->isNewRecord)
			{
				
				$this->created=time();
				$this->modified=time();
			}
			else
			{
				
				$this->modified=time();
				//$this->modified=date("d/m/Y h:i:s a", time());
			}
			return true;
		}
		else
			return false;
	}//end of beforeSave().
	
	public function getSuppliersName()
    {
        //return array(
          return CHtml::listData(Suppliers::model()->findAll(), 'id', 'name');
        
    }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'item_id' => 'Item',
			'company_id' => 'Company',
			'part_number' => 'Part Number',
			'name' => 'Name',
			'description' => 'Description',
			'barcode' => 'Barcode',
			'location_room' => 'Location Room',
			'location_row' => 'Location Row',
			'location_column' => 'Location Column',
			'location_shelf' => 'Location Shelf',
			'category_id' => 'Category',
			'current_quantity' => 'Current Quantity',
			'available_quantity' => 'Available Quantity',
			'recommended_lowest_quantity' => 'Recommended Lowest Quantity',
			'recommended_highest_quantity' => 'Recommended Highest Quantity',
			'remarks' => 'Remarks',
			'active' => 'Active',
			'image_url' => 'Image Url',
			'sale_price' => 'Sale Price',
			'factory_due_date' => 'Factory Due Date',
			'suppliers_id' => 'Suppliers',
			'fits_in_model' => 'Fits In Model',
			'created' => 'Created',
			'modified' => 'Last Modified',
			'deleted' => 'Deleted',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		
		//$criteria->with = array('suppliers');
		$criteria->order = 'name ASC';
		
		$criteria->compare('item_id',$this->item_id);
		//$criteria->compare('company_id',$this->company_id);
		$criteria->compare('part_number',$this->part_number,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('barcode',$this->barcode,true);
		$criteria->compare('location_room',$this->location_room,true);
		$criteria->compare('location_row',$this->location_row,true);
		$criteria->compare('location_column',$this->location_column,true);
		$criteria->compare('location_shelf',$this->location_shelf,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('current_quantity',$this->current_quantity);
		$criteria->compare('available_quantity',$this->available_quantity);
		$criteria->compare('recommended_lowest_quantity',$this->recommended_lowest_quantity);
		$criteria->compare('recommended_highest_quantity',$this->recommended_highest_quantity);
//		$criteria->compare('remarks',$this->remarks,true);
//		$criteria->compare('active',$this->active);
//		$criteria->compare('image_url',$this->image_url,true);
//		$criteria->compare('sale_price',$this->sale_price);
//		$criteria->compare('factory_due_date',$this->factory_due_date,true);
//		$criteria->compare('suppliers_id',$this->suppliers_id);
		$criteria->compare('fits_in_model',$this->fits_in_model,true);
//		$criteria->compare('created',$this->created,true);
//		$criteria->compare('modified',$this->modified,true);
//		$criteria->compare('deleted',$this->deleted,true);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
		
//		return new CActiveDataProvider( 'Items', array(
//				'criteria'=>$criteria,
//				'sort'=>array(
//						'attributes'=>array(
//								'supplier_name'=>array(
//										'asc'=>'suppliers.name',
//										'desc'=>'suppliers.name DESC',
//								),
//								'*',
//						),
//				),
//		));
	}
	
	public function freeSearch($keyword)
	{	
		
		/*Creating a new criteria for search*/
		$criteria = new CDbCriteria;
		
		
		$criteria->compare('name', $keyword, true, 'OR');
		$criteria->compare('barcode', $keyword, true, 'OR');
		$criteria->compare('part_number', $keyword, true, 'OR');

		
		/*result limit*/
		$criteria->limit = 100;
		/*When we want to return model*/
		return	Items::model()->findAll($criteria);
		
		/*To return active dataprovider uncomment the following code*/
		/*
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
		*/
		
	}
	
	
	
    
    
}