<?php
/**
 * Modal
 *
 * An example modal using the Micromodal library.
 *
 * @package TAC Framework
 * @since TAC Framework 1.0
 */

?>

<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
	<div class="modal__overlay" tabindex="-1" data-micromodal-close>
		<div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
			<header class="modal__header">
				<h2>Micromodal</h2>
			</header>
			<main class="modal__content" id="modal-1-content">
				<p>Try hitting the <code>tab</code> key and notice how the focus stays within the modal itself. Also, <code>esc</code> to close modal.</p>
				<button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">Close</button>
			</main>
		</div>
	</div>
</div>
