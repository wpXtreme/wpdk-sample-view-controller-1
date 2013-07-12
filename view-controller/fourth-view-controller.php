<?php
/**
 * This view controller display a custom view
 *
 */
class FourthViewController extends WPDKViewController {

  /**
   * Create an instance of FourthViewController class
   *
   * @brief Construct
   *
   * @return FourthViewController
   */
  public function __construct()
  {
    parent::__construct( 'fourth-view-controller', 'Title of fourth view cntroller' );

    $controls_view = new ControlsView( 'View A' );

    $this->view->addSubview( $controls_view );
  }

}

/**
 * @class CustomView
 */
class ControlsView extends WPDKView {

  private $name;

  /**
   * Create an instance of ControlsView class
   *
   * @brief Construct
   *
   * @return ControlsView
   */
  public function __construct( $name )
  {
    parent::__construct( $name );

    $this->name = $name;
  }

  // TODO
  private function fields()
  {
    $fields = array(
      'I am a Legend' => array(

        'Hi, Welcome to CLA (Controls Layout Form).',

        array(
          array(
            'type'  => WPDKUIControlType::TEXT,
            'name'  => 'input_a',
            'label' => 'Move mouse hover me',
            'title' => 'I am a tooltip for control WPDKUIControlType::TEXT',
            'value' => ''
          ),
          array(
            'type'        => WPDKUIControlType::TEXT,
            'name'        => 'input_b',
            'label'       => 'With a place holder',
            'placeholder' => 'Eg: Hello',
            'value'       => ''
          )
        ),

        array(
          array(
            'type'  => WPDKUIControlType::TEXT,
            'name'  => 'input_c',
            'label' => 'Second row',
            'value' => 'Prefill'
          ),
          array(
            'type'  => WPDKUIControlType::TEXT,
            'name'  => 'input_d',
            'label' => 'With size',
            'size'  => 4,
            'value' => ''
          ),
        ),
      ),

      'Second Legend' => array(
        'Demo WPDKUIControls',
        array(
          array(
            'type'  => WPDKUIControlType::BUTTON,
            'value' => 'I am a primary input button',
            'class' => 'button-primary'
          )
        ),
        array(
          array(
            'type'  => WPDKUIControlType::BUTTON,
            'value' => 'I am a simple input button',
            'class' => 'button-secondary'
          ),
        ),

        'Choose controls',

        array(
          array(
            'type'  => WPDKUIControlType::CHECKBOX,
            'name'  => 'checkbox_test',
            'label' => 'Check me',
            'value' => 'off'
          )
        ),
        array(
          array(
            'type'  => WPDKUIControlType::RADIO,
            'name'  => 'radio_test',
            'label' => 'Choose me',
            'value' => 'off'
          )
        ),
        array(
          array(
            'type'    => WPDKUIControlType::SELECT,
            'label'   => 'Select an item',
            'options' => array(
              'one'   => 'Rome',
              'two'   => 'Milan',
              'three' => 'Paris'
            ),
            'value'   => 'two'
          ),

          array(
            'type'    => WPDKUIControlType::SELECT,
            'label'   => 'With Callback',
            'options' => array(
              $this,
              'callback_options'
            ),
            'value'   => 'two'
          ),

          array(
            'type'    => WPDKUIControlType::SELECT,
            'label'   => 'Select empty',
            'options' => array(),
          )
        ),
        array(
          array(
            'type'    => WPDKUIControlType::SELECT_LIST,
            'label'   => 'Select List item',
            'options' => array(
              'one'   => 'Rome',
              'two'   => 'Milan',
              'three' => 'Paris'
            ),
            'value'   => 'three'
          ),

          array(
            'type'    => WPDKUIControlType::SELECT_LIST,
            'label'   => 'List empty',
            'options' => array(),
          ),
        ),

        'Text controls',

        array(
          array(
            'type'  => WPDKUIControlType::TEXT,
            'id'    => 'simple_text',
            'label' => 'Simple text',
            'value' => ''
          ),
        ),
        array(
          array(
            'type'  => WPDKUIControlType::EMAIL,
            'id'    => 'email',
            'label' => 'Email',
            'value' => ''
          ),
        ),
        array(
          array(
            'type'  => WPDKUIControlType::PASSWORD,
            'id'    => 'pwd',
            'label' => 'Password',
          )
        ),

        array(
          array(
            'type'  => WPDKUIControlType::DATE,
            'id'    => 'data_test',
            'label' => 'Date',
            'value' => ''
          ),
          array(
            'type'  => WPDKUIControlType::DATETIME,
            'id'    => 'data_time_test',
            'label' => 'Date and time',
            'value' => ''
          )
        ),
        array(
          array(
            'type'  => WPDKUIControlType::NUMBER,
            'id'    => 'number',
            'label' => 'Number',
            'title' => 'This is a true HTML 5 input type number. If your browser does not support it... upgrade your browser!'
          ),
          array(
            'type'  => WPDKUIControlType::PHONE,
            'id'    => 'phone',
            'label' => 'Phone',
            'title' => 'This is a true HTML 5 input type tel. If your browser does not support it... upgrade your browser!'
          ),
        ),
        array(
          array(
            'type'  => WPDKUIControlType::TEXTAREA,
            'id'    => 'textarea',
            'label' => 'Edit',
            'title' => 'This is a textarea control! Note that label is Aligned to top.'
          ),
        ),

        'Standard controls',

        array(
          array(
            'type'  => WPDKUIControlType::FILE,
            'id'    => 'file_upload',
            'label' => 'Select a file',
            'value' => ''
          )
        ),
        array(
          array(
            'type'  => WPDKUIControlType::LABEL,
            'id'    => 'own_label',
            'value' => 'I am a simple label',
          ),
        ),

        'Amazing controls',

        array(
          array(
            'type'  => WPDKUIControlType::SWIPE,
            'id'    => 'swipe',
            'label' => 'Swipe me',
            'title' => 'Swipe me to display an alert',
            'value' => ''
          )
        ),

        array(
          array(
            'type'  => WPDKUIControlType::ALERT,
            'value' => 'Twitter Bootstrap Alert with dismiss button'
          )
        ),
        array(
          array(
            'type'  => WPDKUIControlType::ALERT,
            'block' => true,
            'value' => 'Twitter Bootstrap Alert in block mode'
          )
        ),
        array(
          array(
            'type'       => WPDKUIControlType::ALERT,
            'alert_type' => WPDKTwitterBootstrapAlertType::ALERT,
            'value'      => 'Content of Alert type <code>WPDKTwitterBootstrapAlertType::ALERT</code>'
          )
        ),
        array(
          array(
            'type'           => WPDKUIControlType::ALERT,
            'alert_type'     => WPDKTwitterBootstrapAlertType::SUCCESS,
            'dismiss_button' => false,
            'value'          => 'Content of Alert type <code>WPDKTwitterBootstrapAlertType::SUCCESS</code> without dismiss button'
          )
        ),
        array(
          array(
            'type'  => WPDKUIControlType::CUSTOM,
            'content' => 'Custom Control'
          )
        ),
      )

    );

    return $fields;

  }

  // TODO
  public function callback_options()
  {
    $options = array(
      'mac-os'  => 'Mac OS',
      'windows' => 'Windows',
      'linux'   => 'Linux',
    );
    return $options;
  }

  public function draw()
  {
    $controls = new WPDKUIControlsLayout( $this->fields() );
    $controls->display();
  }
}
