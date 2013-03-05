<?php
/**
 * PhalconEye
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 *
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to lantian.ivan@gmail.com so we can send you a copy immediately.
 *
 */

class PageController extends Controller
{
    /**
     * @Route("/page/{url:[a-zA-Z0-9_]+}", methods={"GET"}, name="page")
     */
    public function indexAction($url)
    {
        $this->renderContent($url);
    }
}

