<?php


namespace Drupal\chronological_location\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 *
 * Plugin implementation of the 'chronological_location_widget' widget.
 *
 * @FieldWidget(
 *   id = "chronological_location_widget",
 *   label = @Translation("chronological location field"),
 *   field_types = {
 *     "chronological_location"
 *   },
 *   multiple_values = TRUE,
 * )
 *
 * Created by PhpStorm.
 * User: richard
 * Date: 6/1/17
 * Time: 10:10 AM
 */
class ChronologicalLocationWidget extends WidgetBase
{
    /**
     * {@inheritdoc}
     */
    public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {

        $element['location_name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Location Name'),
            '#required' => FALSE,
            '#size' => 64
        ];

        $element['lat'] = [
            '#type' => 'number',
            '#title' => $this->t('Latitude'),
            '#size' => 10,
        ];

        $element['long'] = [
            '#type' => 'number',
            '#title' => $this->t('Longitude'),
            '#size' => 10,
        ];

        $element['start_date'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Start Date in YYYY-MM-dd'),
            '#size' => 10,
        ];

        $element['start_time'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Start time in HH:MM:ss'),
            '#size' => 8,
        ];

        $element['end_date'] = [
            '#type' => 'textfield',
            '#title' => $this->t('End Date in YYYY-MM-dd'),
            '#size' => 10,
        ];


        $element['end_time'] = [
            '#type' => 'textfield',
            '#title' => $this->t('End time in HH:MM:ss'),
            '#size' => 8,
        ];

        $element += [
            '#type' => 'fieldset',
        ];

        return $element;
    }
}