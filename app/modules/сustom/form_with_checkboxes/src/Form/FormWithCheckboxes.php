<?php
/**
 * @file
 * Contains \Drupal\form_with_checkboxes\Form\FormWithCheckboxes.
 *
 */

namespace Drupal\form_with_checkboxes\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class FormWithCheckboxes extends FormBase {

  /**
   * @inheritdoc
   */
  public function getFormId() {
    // TODO: Implement getFormId() method.
  }

  /**
   * @inheritdoc
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['value'] = [
      '#type'  => 'checkboxes',
      '#options' => array('first' => $this->t('first'), 'second' => $this->t('second')),
      '#title' => $this->t('Checkboxes'),
      '#filter' => true,
    ];
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Ok'),
      '#button_type' => 'primary',
    );

    return $form;
  }

  /**
   * @inheritdoc
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // TODO: Implement submitForm() method.
  }
}