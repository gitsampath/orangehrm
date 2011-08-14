<?php

/**
 * BaseAvailableFilterField
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $reportGroupId
 * @property integer $filterFieldId
 * @property string $type
 * @property ReportGroup $ReportGroup
 * @property FilterField $FilterField
 * 
 * @method integer              getReportGroupId() Returns the current record's "reportGroupId" value
 * @method integer              getFilterFieldId() Returns the current record's "filterFieldId" value
 * @method string               getType()          Returns the current record's "type" value
 * @method ReportGroup          getReportGroup()   Returns the current record's "ReportGroup" value
 * @method FilterField          getFilterField()   Returns the current record's "FilterField" value
 * @method AvailableFilterField setReportGroupId() Sets the current record's "reportGroupId" value
 * @method AvailableFilterField setFilterFieldId() Sets the current record's "filterFieldId" value
 * @method AvailableFilterField setType()          Sets the current record's "type" value
 * @method AvailableFilterField setReportGroup()   Sets the current record's "ReportGroup" value
 * @method AvailableFilterField setFilterField()   Sets the current record's "FilterField" value
 * 
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAvailableFilterField extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_available_filter_field');
        $this->hasColumn('report_group_id as reportGroupId', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('filter_field_id as filterFieldId', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ReportGroup', array(
             'local' => 'report_group_id',
             'foreign' => 'reportGroupId',
             'onDelete' => 'cascade'));

        $this->hasOne('FilterField', array(
             'local' => 'filter_field_id',
             'foreign' => 'filterFieldId'));
    }
}