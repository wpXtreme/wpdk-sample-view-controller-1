<?php
/**
 * This view controller display a custom view without header view; the header view is override
 *
 *     <div class="" id="custom-view">
 *      <h4>I'm a TAG h4 for second view controller in a custom view</h4>
 *     </div>
 */
class SecondViewController extends WPDKViewController {

  /**
   * Create an instance of SecondViewController class
   *
   * @brief Construct
   *
   * @return SecondViewController
   */
  public function __construct()
  {
    parent::__construct( 'second-view-controller', 'Title of Second view controller' );

    $this->view = new CustomView();
  }

}

/**
 * @class CustomView
 */
class CustomView extends WPDKView {

  /**
   * Create an instance of CustomView class
   *
   * @brief Construct
   *
   * @return CustomView
   */
  public function __construct()
  {
    parent::__construct( 'custom-view' );
  }

  public function draw()
  {
    ?>
    <h3>I'm a TAG h4 for second view controller in a custom view</h3>
  <?php

  }
}
