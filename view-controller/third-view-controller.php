<?php
/**
 * This view controller display a some custom view
 *
 *     <div class="" id="custom-view">
 *      <h4>I'm a TAG h4 for second view controller in a custom view</h4>
 *     </div>
 */
class ThirdViewController extends WPDKViewController {

  /**
   * Create an instance of ThirdViewController class
   *
   * @brief Construct
   *
   * @return ThirdViewController
   */
  public function __construct()
  {
    parent::__construct( 'third-view-controller', 'Title of third view cntroller' );

    $a_view = new SimpleCustomView( 'View A' );
    $b_view = new SimpleCustomView( 'View B' );
    $c_view = new SimpleCustomView( 'View C' );

    $this->view->addSubview( $a_view );
    $this->view->addSubview( $b_view );
    $this->viewHead->addSubview( $c_view );

  }

}

/**
 * @class CustomView
 */
class SimpleCustomView extends WPDKView {

  private $name;

  /**
   * Create an instance of SimpleCustomView class
   *
   * @brief Construct
   *
   * @return SimpleCustomView
   */
  public function __construct( $name )
  {
    parent::__construct( $name );

    $this->name = $name;
  }

  public function draw()
  {
    ?>
    <h3>I'm <?php echo $this->name ?> with id <?php echo $this->id ?></h3>
  <?php

  }
}
