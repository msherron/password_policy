<?php
/**
 * @file
 * Provides Drupal\password_policy\PasswordConstraintBase.
 */

namespace Drupal\password_policy;

use Drupal\Component\Plugin\PluginBase;
use Drupal\Core\Form\FormInterface;
use Drupal\Core\Form\FormStateInterface;

abstract class PasswordConstraintBase extends PluginBase implements FormInterface, PasswordConstraintInterface {

  /**
   * Returns a true/false status as to if the password meets the requirements of the constraint.
   * @param password
   *   The password entered by the end user
   * @return boolean
   *   Whether or not the password meets the constraint in the plugin.
   */
  public function validate($constraint_id, $password) {
    //all classes should plan to override this specific function, for now, just assume TRUE
    return TRUE;
  }

  /**
   * Returns a translated string for the constraint title.
   * @return string
   */
  public function getTitle() {
    return $this->pluginDefinition['title'];
  }

  /**
   * Returns a translated description for the constraint description.
   * @return string
   */
  public function getDescription() {
    return $this->pluginDefinition['description'];
  }

  /**
   * Returns a translated error message for the constraint.
   * @return string
   */
  public function getErrorMessage() {
    return $this->pluginDefinition['error_message'];
  }

  /**
   * Returns the path for adding constraints.
   * @return string
   */
  public function getConstraintPath() {
    return $this->pluginDefinition['constraint_path'];
  }

  /**
   * Returns the path for updating existing constraints.
   * @return string
   */
  public function getConstraintUpdatePath() {
    return $this->pluginDefinition['constaint_update_path'];
  }

  /**
   * Returns the token for the identifier in the update path.
   * @return string
   */
  public function getConstraintUpdateToken() {
    return $this->pluginDefinition['constraint_update_token'];
  }

  /**
   * Returns an array of key value pairs.
   * @return array
   */
  public function getConstraints() {
    return array();
  }

  /**
   * Deletes the specific constraint.
   * @return boolean
   */
  public function deleteConstraint($constraint_id) {
    return TRUE;
  }

  /**
   * Check if the specific constraint id exists.
   * @return boolean
   */
  public function constraintExists($constraint_id) {
    return FALSE;
  }

  /**
   * Returns the title of the constraint.
   * @return string
   */
  public function getConstraint($constraint_id) {
    return NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return $this->getPluginDefinition()['id'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {}

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {}

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return array();
  }

  /**
   * {@inheritdoc}
   */
  public function getConfiguration() {
    return $this->configuration;
  }

  /**
   * {@inheritdoc}
   */
  public function setConfiguration(array $configuration) {
    $this->configuration = $configuration;
  }

  /**
   * {@inheritdoc}
   */
  public function calculateDependencies() {
    return array();
  }
}
