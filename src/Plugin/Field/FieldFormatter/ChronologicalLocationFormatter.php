<?php

namespace Drupal\chronological_location\Plugin\Field\Formatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 *
 * Plugin implementation of the 'chronological_location' default formatter.
 *
 * @FieldFormatter(
 *   id = "chronological_location_formatter",
 *   label = @Translation("Chronological Location Formatter"),
 *   field_types = {
 *     "chronological_location"
 *   }
 * )
 *
 * Created by PhpStorm.
 * User: richard
 * Date: 6/8/17
 * Time: 1:15 PM
 */
class ChronologicalLocationFormatter extends FormatterBase
{

    /**
     * {@inheritdoc}
     */
    public function viewElements(FieldItemListInterface $items, $langcode) {
        $element = array();

        foreach ($items as $delta => $item) {
            // Render each element as markup.
            $element[$delta] = array(
                '#type' => 'markup',
                '#markup' => $item->value,
            );
        }

        return $element;
    }
}