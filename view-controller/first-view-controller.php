<?php
/**
 * First view controller
 *
 * ## Overview
 * This sample shows how works the view controller
 *
 *     <div class="wrap" id="first-view-controller-view-root">
 *       <button class="wpdk-fullscreen"></button>
 *
 *       <!-- Custom Content -->
 *       <h3>I'm a TAG h3</h3>
 *       <p>And I'm a paragraph</p>
 *
 *       <!-- Header -->
 *       <div class="clearfix wpdk-header-view" id="first-view-controller-header-view">
 *         <div class="wpdk-vc-header-icon" id="first-view-controller-header-view"></div>
 *         <h2>Title of First view cntroller</h2>
 *         <div class="wpdk-vc-header-after-title"></div>
 *       </div>
 *
 *     </div>
 *
 * @class           FirstViewController
 * @author          =undo= <info@wpxtre.me>
 * @copyright       Copyright (C) 2013 wpXtreme Inc. All Rights Reserved.
 * @date            2013-07-11
 * @version         0.1.0
 *
 */
class FirstViewController extends WPDKViewController {

  /**
   * Create an instance of FirstViewController class
   *
   * @brief Construct
   *
   * @return FirstViewController
   */
  public function __construct()
  {
    parent::__construct( 'first-view-controller', 'Title of First view cntroller' );

    $this->view->content     = $this->draw_before();
    $this->viewHead->content = $this->draw_head();

  }

  /**
   * @return string
   */
  private function draw_before()
  {
    return '<h3>Draw Before</h3>';
  }

  /**
   * @return string
   */
  private function draw_head()
  {
    return '<h3>Draw Head</h3>';
  }

}