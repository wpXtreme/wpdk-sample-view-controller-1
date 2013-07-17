<?php
/**
 * First view controller
 *
 * ## Overview
 * This sample shows how works the view controller
 *
 *     <div class="wpdk-view wrap clearfix" id="first-view-controller-view-root" data-type="wpdk-view">
 *       <h3>Draw Before</h3>
 *       <div class="wpdk-view clearfix wpdk-header-view clearfix" id="first-view-controller-header-view" data-type="wpdk-view">
 *         <div class="wpdk-vc-header-icon" id="first-view-controller-header-view" data-type="wpdk-header-view"></div>
 *         <h2><button class="wpdk-fullscreen"></button>Title of First view controller    </h2>
 *         <div class="wpdk-vc-header-after-title"></div>
 *         <h3>Draw Head</h3>
 *       </div>
 *     </div>
 *
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
    parent::__construct( 'first-view-controller', 'Title of First view controller' );

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