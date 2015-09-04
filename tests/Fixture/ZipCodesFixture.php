<?php
namespace ZipCoder\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZipCodesFixture
 *
 */
class ZipCodesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'postcode' => ['type' => 'string', 'length' => 7, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'postcode_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pnum' => ['type' => 'integer', 'length' => 4, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pchar' => ['type' => 'string', 'fixed' => true, 'length' => 2, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'minnumber' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'maxnumber' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'numbertype' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'street' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'city' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'city_id' => ['type' => 'integer', 'length' => 5, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'municipality' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'municipality_id' => ['type' => 'integer', 'length' => 5, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'province' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'province_code' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'lat' => ['type' => 'decimal', 'length' => 15, 'precision' => 13, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'lon' => ['type' => 'decimal', 'length' => 15, 'precision' => 13, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'rd_x' => ['type' => 'decimal', 'length' => 31, 'precision' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'rd_y' => ['type' => 'decimal', 'length' => 31, 'precision' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'location_detail' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => 'postcode', 'comment' => '', 'precision' => null],
        'changed_date' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'postcode_number' => ['type' => 'index', 'columns' => ['postcode_id', 'minnumber', 'maxnumber'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'postcode' => 'Lorem',
            'postcode_id' => 1,
            'pnum' => 1,
            'pchar' => '',
            'minnumber' => 1,
            'maxnumber' => 1,
            'numbertype' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'street' => 'Lorem ipsum dolor sit amet',
            'city' => 'Lorem ipsum dolor sit amet',
            'city_id' => 1,
            'municipality' => 'Lorem ipsum dolor sit amet',
            'municipality_id' => 1,
            'province' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'province_code' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'lat' => '',
            'lon' => '',
            'rd_x' => '',
            'rd_y' => '',
            'location_detail' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'changed_date' => 1441331145
        ],
    ];
}
