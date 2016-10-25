<?php
/**
 * File containing the Wikifab Footer class
 *
 *
 * @file
 * @ingroup   Skins
 */

namespace Skins\Chameleon\Components;

use Linker;

/**
 * ToolbarHorizontal class
 *
 * A horizontal toolbar containing standard sidebar items (toolbox, language links).
 *
 * The toolbar is an unordered list in a nav element: <nav role="navigation" id="p-tb" >
 *
 * @author Stephan Gambke
 * @since 1.0
 * @ingroup Skins
 */
class OSEFooterLinks extends Component {

	/**
	 * Builds the HTML code for this component
	 *
	 * @return String the HTML code
	 */
	public function getHtml() {

		$ret = '
			<div class="row footer-links">
				<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="row">
				<div class="col-md-7 col-sm-7 col-xs-6">
					<h4>'. wfMessage( 'wffootertitle-cuto-1' )->text() .'</h4>
					<ul class="list-unstyled">
						<li><a href="'. wfMessage( 'wffooterlinks-col1-1' )->text() .'">'. wfMessage( 'wffooter-col1-1' )->text() .'</a></li>
						<li><a href="'. wfMessage( 'wffooterlinks-col1-2' )->text() .'">'. wfMessage( 'wffooter-col1-2' )->text() .'</a></li>
						<li><a href="'. wfMessage( 'wffooterlinks-col1-3' )->text() .'">'. wfMessage( 'wffooter-col1-3' )->text() .'</a></li>
						<li><a href="'. wfMessage( 'wffooterlinks-col1-4' )->text() .'">'. wfMessage( 'wffooter-col1-4' )->text() .'</a></li>
						<li><a href="'. wfMessage( 'wffooterlinks-col1-5' )->text() .'">'. wfMessage( 'wffooter-col1-5' )->text() .'</a></li>
						<li><a href="'. wfMessage( 'wffooterlinks-col1-6' )->text() .'">'. wfMessage( 'wffooter-col1-6' )->text() .'</a></li>
					</ul>
				</div>
				<div class="col-md-5 col-sm-5 col-xs-6">
					<h4>'. wfMessage( 'wffootertitle-cuto-2' )->text() .'</h4>
					<ul class="list-unstyled">
						<li><a href="'. wfMessage( 'wffooterlinks-col2-1' )->text() .'">'. wfMessage( 'wffooter-col2-1' )->text() .'</a></li>
						<li><a href="'. wfMessage( 'wffooterlinks-col2-2' )->text() .'">'. wfMessage( 'wffooter-col2-2' )->text() .'</a></li>
						<li><a href="'. wfMessage( 'wffooterlinks-col2-3' )->text() .'">'. wfMessage( 'wffooter-col2-3' )->text() .'</a></li>
						<li><a href="'. wfMessage( 'wffooterlinks-col2-4' )->text() .'">'. wfMessage( 'wffooter-col2-4' )->text() .'</a></li>
						<li><a href="'. wfMessage( 'wffooterlinks-col2-5' )->text() .'">'. wfMessage( 'wffooter-col2-5' )->text() .'</a></li>
						<li><a href="'. wfMessage( 'wffooterlinks-col2-6' )->text() .'">'. wfMessage( 'wffooter-col2-6' )->text() .'</a></li>
					</ul>
				</div>
				</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-6">
					<h4>'. wfMessage( 'wffootertitle-cuto-3' )->text() .'</h4>
					<ul class="list-unstyled">
						<li><a href="/wiki/Special:WfExplore?wf-expl-area-'. wfMessage( 'wffooterlinks-categoriename-custo-1' )->text() .'=on">'. wfMessage( 'wffooter-categoriename-custo-1' )->text() .'</a></li>
						<li><a href="/wiki/Special:WfExplore?wf-expl-area-'. wfMessage( 'wffooterlinks-categoriename-custo-2' )->text() .'=on">'. wfMessage( 'wffooter-categoriename-custo-2' )->text() .'</a></li>
						<li><a href="/wiki/Special:WfExplore?wf-expl-area-'. wfMessage( 'wffooterlinks-categoriename-custo-3' )->text() .'=on">'. wfMessage( 'wffooter-categoriename-custo-3' )->text() .'</a></li>
						<li><a href="/wiki/Special:WfExplore?wf-expl-area-'. wfMessage( 'wffooterlinks-categoriename-custo-4' )->text() .'=on">'. wfMessage( 'wffooter-categoriename-custo-4' )->text() .'</a></li>
						<li><a href="/wiki/Special:WfExplore?wf-expl-area-'. wfMessage( 'wffooterlinks-categoriename-custo-5' )->text() .'=on">'. wfMessage( 'wffooter-categoriename-custo-5' )->text() .'</a></li>
						<li><a href="/wiki/Special:WfExplore?wf-expl-area-'. wfMessage( 'wffooterlinks-categoriename-custo-6' )->text() .'=on">'. wfMessage( 'wffooter-categoriename-custo-6' )->text() .'</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<h4>&nbsp;</h4>
					<ul class="list-unstyled">
					<li><a href="/wiki/Special:WfExplore?wf-expl-area-'. wfMessage( 'wffooterlinks-categoriename-custo-7' )->text() .'=on">'. wfMessage( 'wffooter-categoriename-custo-7' )->text() .'</a></li>
					<li><a href="/wiki/Special:WfExplore?wf-expl-area-'. wfMessage( 'wffooterlinks-categoriename-custo-8' )->text() .'=on">'. wfMessage( 'wffooter-categoriename-custo-8' )->text() .'</a></li>
					<li><a href="/wiki/Special:WfExplore?wf-expl-area-'. wfMessage( 'wffooterlinks-categoriename-custo-9' )->text() .'=on">'. wfMessage( 'wffooter-categoriename-custo-9' )->text() .'</a></li>
					<li><a href="/wiki/Special:WfExplore?wf-expl-area-'. wfMessage( 'wffooterlinks-categoriename-custo-10' )->text() .'=on">'. wfMessage( 'wffooter-categoriename-custo-10' )->text() .'</a></li>
					<li><a href="/wiki/Special:WfExplore?wf-expl-area-'. wfMessage( 'wffooterlinks-categoriename-custo-11' )->text() .'=on">'. wfMessage( 'wffooter-categoriename-custo-11' )->text() .'</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<h4>'. wfMessage( 'wffootertitle-cuto-4' )->text() .'</h4>
					<ul class="list-unstyled">
						<li><a href="https://www.facebook.com/OpenSourceEcology" target="_blank">Facebook</a></li>
						<li><a href="https://twitter.com/OSEcology" target="_blank">Twitter</a></li>
						<li><a href="https://vimeo.com/opensourceecology" target="_blank">Vimeo</a></li>
						<li><a href="https://www.ted.com/talks/marcin_jakubowski?language=en" target="_blank">TED Talk</a></li>
						<li><a href="http://opensourceecology.org/blog-2/" target="_blank">Blog</a></li>
						<li><a href="/wiki/OSEmail" target="_blank">Newsletter</a></li>
					</ul>
				</div>
				</div>
				</div>
			</div>
		';
		return $ret;
	}
}
