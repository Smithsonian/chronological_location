<?php

namespace Drupal\chronological_location\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\Field\Plugin\Field\FieldType\DateTimeItem;

/**
 * Plugin implementation of the 'chronological location' field type.
 *
 * @FieldType(
 *   id = "chronological_location",
 *   label = @Translation("Chronological Location"),
 *   description = @Translation("An multiple attribute field representing the location of something within a time interval."),
 *   default_widget = "chronological_location_widget",
 *   default_formatter = "chronological_location_formatter",
 * )
 */
class ChronologicalLocationFieldType extends FieldItemBase {

// methods here.
//

    /**
     * {@inheritdoc}
     */
    public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
        $properties = [];
        $properties['location_name'] = DataDefinition::create('string')->setLabel(
            t('The location name.'));
        $properties['lat'] = DataDefinition::create('float')->setLabel(
            t('The latitude of the location.'));
        $properties['long'] = DataDefinition::create('float')->setLabel(
            t('The longitude of the location.'));
        $properties['start_date'] = DataDefinition::create("string")->setLabel(
            t('The Start Date of the time block'));
        $properties['start_time'] = DataDefinition::create("string")->setLabel(
            t('The Start Time of the time block'));
        $properties['end_date'] = DataDefinition::create("string")->setLabel(
            t('The End Date of the time block'));
        $properties['end_time'] = DataDefinition::create("string")->setLabel(
            t('The End Time of the time block'));
        return $properties;
    }

    /**
     * {@inheritdoc}
     */
    public static function schema(FieldStorageDefinitionInterface $field_definition) {
        return [
            'columns' => [
                'location_name' => [
                    'type' => 'varchar',
                    'length' => 64,
                ],
                'lat' => [
                    'type' => 'float',
                ],
                'long' => [
                    'type' => 'float',
                ],
                'start_date' => [
                    'type' => 'varchar',
                    'length' => 10,
                ],
                'start_time' => [
                    'type' => 'varchar',
                    'length' => 8,
                ],
                'end_date' => [
                    'type' => 'varchar',
                    'length' => 10,
                ],
                'end_time' => [
                    'type' => 'varchar',
                    'length' => 8,
                ]
            ]
        ];
    }

}