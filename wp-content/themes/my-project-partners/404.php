<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package My_Project_Partners
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found mb-2">
			
			<div class="page-content">
				<div class="text-center">
					<svg width="650" height="512" viewBox="0 0 650 512" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path opacity="0.1" d="M593.904 212.855V194.664C593.904 192.946 593.566 191.246 592.908 189.659C592.251 188.072 591.288 186.63 590.073 185.415C588.859 184.201 587.417 183.237 585.83 182.58C584.243 181.923 582.542 181.585 580.825 181.585H534.659C531.19 181.585 527.863 180.207 525.41 177.754C522.957 175.301 521.579 171.974 521.579 168.505V150.314C521.579 148.596 521.917 146.896 522.575 145.309C523.232 143.722 524.195 142.28 525.41 141.065C526.625 139.851 528.066 138.887 529.653 138.23C531.24 137.573 532.941 137.234 534.659 137.234H536.116C537.834 137.234 539.535 136.896 541.122 136.239C542.708 135.582 544.15 134.618 545.365 133.404C546.579 132.189 547.543 130.747 548.2 129.16C548.857 127.573 549.196 125.873 549.196 124.155V105.964C549.196 102.495 547.818 99.1682 545.365 96.7153C542.912 94.2624 539.585 92.8844 536.116 92.8844L144.209 92.8843C140.74 92.8843 137.413 94.2623 134.961 96.7152C132.508 99.168 131.13 102.495 131.13 105.964V124.155C131.13 125.872 131.468 127.573 132.125 129.16C132.783 130.747 133.746 132.189 134.961 133.403C136.175 134.618 137.617 135.581 139.204 136.239C140.791 136.896 142.491 137.234 144.209 137.234V137.234C147.678 137.234 151.005 138.612 153.458 141.065C155.911 143.518 157.289 146.845 157.289 150.314V168.505C157.289 170.223 156.95 171.923 156.293 173.51C155.636 175.097 154.672 176.539 153.458 177.754C152.243 178.968 150.801 179.931 149.214 180.589C147.628 181.246 145.927 181.584 144.209 181.584H93.6297C91.9121 181.584 90.2113 181.923 88.6244 182.58C87.0375 183.237 85.5957 184.201 84.3811 185.415C83.1666 186.63 82.2032 188.072 81.5459 189.659C80.8886 191.245 80.5503 192.946 80.5503 194.664V212.855C80.5503 214.573 80.8886 216.273 81.5459 217.86C82.2032 219.447 83.1666 220.889 84.3811 222.104C85.5957 223.318 87.0376 224.282 88.6244 224.939C90.2113 225.596 91.9121 225.934 93.6297 225.934H113.476C116.945 225.934 120.272 227.312 122.725 229.765C125.178 232.218 126.556 235.545 126.556 239.014V257.205C126.556 260.674 125.178 264.001 122.725 266.454C120.272 268.907 116.945 270.285 113.476 270.285H113.428C109.959 270.285 106.633 271.663 104.18 274.115C101.727 276.568 100.349 279.895 100.349 283.364V301.555C100.349 303.273 100.687 304.974 101.344 306.56C102.002 308.147 102.965 309.589 104.18 310.804C105.394 312.018 106.836 312.982 108.423 313.639C110.01 314.296 111.711 314.635 113.428 314.635H116.3C119.769 314.635 123.095 316.013 125.548 318.465C128.001 320.918 129.379 324.245 129.379 327.714V345.905C129.379 347.623 129.041 349.324 128.384 350.911C127.726 352.497 126.763 353.939 125.548 355.154C124.334 356.368 122.892 357.332 121.305 357.989C119.718 358.646 118.017 358.985 116.3 358.985H69.1752C67.4576 358.985 65.7568 359.323 64.1699 359.98C62.583 360.638 61.1411 361.601 59.9266 362.816C58.7121 364.03 57.7486 365.472 57.0913 367.059C56.434 368.646 56.0957 370.347 56.0957 372.064V390.255C56.0957 391.973 56.434 393.674 57.0913 395.261C57.7486 396.847 58.712 398.289 59.9266 399.504C61.1411 400.718 62.583 401.682 64.1699 402.339C65.7567 402.996 67.4575 403.335 69.1751 403.335L543.138 403.335C546.607 403.335 549.934 401.957 552.387 399.504C554.84 397.051 556.218 393.724 556.218 390.255V372.064C556.218 370.347 555.879 368.646 555.222 367.059C554.565 365.472 553.601 364.03 552.387 362.816C551.172 361.601 549.73 360.638 548.143 359.98C546.557 359.323 544.856 358.985 543.138 358.985H531.798C528.329 358.985 525.002 357.607 522.549 355.154C520.096 352.701 518.718 349.374 518.718 345.905V327.714C518.718 324.245 520.096 320.918 522.549 318.466C525.002 316.013 528.329 314.635 531.798 314.635H558.538C560.255 314.635 561.956 314.296 563.543 313.639C565.13 312.982 566.572 312.018 567.786 310.804C569.001 309.589 569.964 308.147 570.621 306.561C571.279 304.974 571.617 303.273 571.617 301.555V283.364C571.617 281.647 571.279 279.946 570.621 278.359C569.964 276.772 569.001 275.33 567.786 274.116C566.572 272.901 565.13 271.938 563.543 271.28C561.956 270.623 560.255 270.285 558.538 270.285H550.426C548.708 270.285 547.007 269.946 545.421 269.289C543.834 268.632 542.392 267.668 541.177 266.454C539.963 265.239 538.999 263.797 538.342 262.211C537.685 260.624 537.346 258.923 537.346 257.205V239.014C537.346 237.296 537.685 235.596 538.342 234.009C538.999 232.422 539.963 230.98 541.177 229.765C542.392 228.551 543.834 227.588 545.421 226.93C547.007 226.273 548.708 225.935 550.426 225.935H580.825C582.542 225.935 584.243 225.596 585.83 224.939C587.417 224.282 588.859 223.318 590.073 222.104C591.288 220.889 592.251 219.447 592.908 217.86C593.566 216.274 593.904 214.573 593.904 212.855V212.855Z" fill="#6E55FF"/>
						<path opacity="0.2" d="M264.582 261.122H195.385C194.557 261.122 193.885 260.45 193.885 259.622V229.283C193.885 228.455 194.557 227.783 195.385 227.783H264.582C265.41 227.783 266.082 228.455 266.082 229.283V259.622C266.082 260.45 265.41 261.122 264.582 261.122Z" fill="#6E55FF" stroke="#6E55FF"/>
						<path opacity="0.2" d="M231.985 221.093H301.182C302.287 221.093 303.182 220.197 303.182 219.093V188.754C303.182 187.649 302.287 186.754 301.182 186.754H231.985C230.881 186.754 229.985 187.649 229.985 188.754V219.093C229.985 220.197 230.881 221.093 231.985 221.093Z" fill="#6E55FF"/>
						<path opacity="0.2" d="M221.795 220.593H152.598C151.769 220.593 151.098 219.921 151.098 219.093V188.754C151.098 187.925 151.769 187.254 152.598 187.254H221.795C222.623 187.254 223.295 187.925 223.295 188.754V219.093C223.295 219.921 222.623 220.593 221.795 220.593Z" fill="#6E55FF" stroke="#6E55FF"/>
						<path opacity="0.2" d="M401.92 286.317H471.117C471.945 286.317 472.617 286.988 472.617 287.817V318.156C472.617 318.984 471.945 319.656 471.117 319.656H401.92C401.091 319.656 400.42 318.984 400.42 318.156V287.817C400.42 286.988 401.091 286.317 401.92 286.317Z" fill="#6E55FF" stroke="#6E55FF"/>
						<path opacity="0.2" d="M365.322 326.846H434.519C435.347 326.846 436.019 327.518 436.019 328.346V358.685C436.019 359.514 435.347 360.185 434.519 360.185H365.322C364.494 360.185 363.822 359.514 363.822 358.685V328.346C363.822 327.518 364.494 326.846 365.322 326.846Z" fill="#6E55FF" stroke="#6E55FF"/>
						<path opacity="0.2" d="M444.709 326.846H513.906C514.734 326.846 515.406 327.518 515.406 328.346V358.685C515.406 359.514 514.734 360.185 513.906 360.185H444.709C443.881 360.185 443.209 359.514 443.209 358.685V328.346C443.209 327.518 443.881 326.846 444.709 326.846Z" fill="#6E55FF" stroke="#6E55FF"/>
						<path d="M338.834 378.832V391.658C338.834 396.611 336.866 401.362 333.363 404.864C329.861 408.367 325.11 410.335 320.157 410.335H257.411C252.457 410.335 247.707 412.303 244.204 415.805C240.702 419.308 238.734 424.058 238.734 429.012C238.734 433.965 236.766 438.716 233.263 442.218C229.761 445.721 225.01 447.689 220.057 447.689H171.597C166.644 447.689 161.893 445.721 158.39 442.218C154.888 438.716 152.92 433.965 152.92 429.012V395.909C152.92 393.456 152.437 391.028 151.498 388.762C150.56 386.496 149.184 384.437 147.45 382.702C145.715 380.968 143.656 379.592 141.39 378.654C139.124 377.715 136.696 377.232 134.243 377.232H76.0959" stroke="#6E55FF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
						<path d="M432.614 64.311H245.734C241.868 64.311 238.734 67.445 238.734 71.311V252.431C238.734 256.297 241.868 259.431 245.734 259.431H432.614C436.48 259.431 439.614 256.297 439.614 252.431V71.311C439.614 67.445 436.48 64.311 432.614 64.311Z" fill="#403C66"/>
						<path opacity="0.8" d="M383.073 258.592H294.594C293.533 258.592 292.515 259.014 291.765 259.764C291.015 260.514 290.594 261.531 290.594 262.592V302.112C290.594 303.173 291.015 304.19 291.765 304.94C292.515 305.691 293.533 306.112 294.594 306.112H308.07C309.131 306.112 310.148 306.533 310.898 307.284C311.648 308.034 312.07 309.051 312.07 310.112V346.032C312.07 347.093 312.491 348.111 313.242 348.861C313.992 349.611 315.009 350.032 316.07 350.032H361.597C362.658 350.032 363.675 349.611 364.425 348.861C365.175 348.111 365.597 347.093 365.597 346.032V310.112C365.597 309.051 366.018 308.034 366.768 307.284C367.519 306.533 368.536 306.112 369.597 306.112H383.073C384.134 306.112 385.152 305.691 385.902 304.94C386.652 304.19 387.073 303.173 387.073 302.112V262.592C387.073 262.067 386.97 261.547 386.769 261.062C386.568 260.576 386.273 260.135 385.902 259.764C385.53 259.392 385.09 259.098 384.604 258.897C384.119 258.696 383.599 258.592 383.073 258.592Z" fill="#6E55FF"/>
						<path d="M312 342H365.635V353.5C365.635 356.308 365.275 358.913 363.984 360.899C362.693 362.885 360.942 364 359.116 364H318.884C317.98 364 317.085 363.726 316.25 363.194C315.414 362.662 314.656 361.882 314.016 360.899C313.377 359.916 312.87 358.749 312.524 357.464C312.178 356.18 312 354.803 312 353.413L312 342Z" fill="#6E55FF"/>
						<path d="M322.51 364.432H355.157V376.909C355.157 381.238 353.437 385.39 350.376 388.451C347.315 391.512 343.163 393.232 338.834 393.232C334.504 393.232 330.352 391.512 327.291 388.451C324.23 385.39 322.51 381.238 322.51 376.909V364.432V364.432Z" fill="#8874FF"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M362.833 215.752C365.042 215.752 366.833 217.543 366.833 219.752V258.592H356.833V219.752C356.833 217.543 358.624 215.752 360.833 215.752H362.833Z" fill="#6E55FF"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M316.833 215.752C319.042 215.752 320.833 217.543 320.833 219.752V258.592H310.833V219.752C310.833 217.543 312.624 215.752 314.833 215.752H316.833Z" fill="#6E55FF"/>
						<path d="M339.174 209.391C365.419 209.391 386.694 188.116 386.694 161.871C386.694 135.627 365.419 114.351 339.174 114.351C312.93 114.351 291.654 135.627 291.654 161.871C291.654 188.116 312.93 209.391 339.174 209.391Z" fill="#8874FF"/>
						<path d="M302.567 173.923C302.564 165.018 305.065 156.291 309.783 148.739C314.501 141.186 321.247 135.112 329.251 131.209C337.256 127.306 346.196 125.731 355.052 126.665C363.908 127.598 372.324 131.002 379.338 136.488C375.638 130.63 370.702 125.652 364.875 121.903C359.048 118.154 352.472 115.724 345.607 114.785C338.742 113.846 331.755 114.42 325.135 116.466C318.516 118.512 312.423 121.981 307.286 126.63C302.149 131.28 298.09 136.996 295.395 143.379C292.7 149.762 291.434 156.658 291.685 163.582C291.936 170.506 293.699 177.292 296.849 183.463C299.999 189.634 304.461 195.041 309.922 199.306C305.108 191.716 302.556 182.911 302.567 173.923Z" fill="#6E55FF"/>
						<path d="M316.174 173.389C320.747 173.389 324.454 169.682 324.454 165.109C324.454 160.536 320.747 156.829 316.174 156.829C311.601 156.829 307.894 160.536 307.894 165.109C307.894 169.682 311.601 173.389 316.174 173.389Z" fill="#6E55FF"/>
						<path d="M362.174 173.389C366.747 173.389 370.454 169.682 370.454 165.109C370.454 160.536 366.747 156.829 362.174 156.829C357.601 156.829 353.894 160.536 353.894 165.109C353.894 169.682 357.601 173.389 362.174 173.389Z" fill="#6E55FF"/>
						<path opacity="0.2" d="M463.609 131.272H495.911" stroke="#6E55FF" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"/>
						<path opacity="0.2" d="M463.609 140.582H495.911" stroke="#6E55FF" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"/>
						<path opacity="0.2" d="M463.609 149.893H495.911" stroke="#6E55FF" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"/>
						<path opacity="0.2" d="M179.585 121.961H211.888" stroke="#6E55FF" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"/>
						<path opacity="0.2" d="M179.585 131.272H211.888" stroke="#6E55FF" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"/>
						<path opacity="0.2" d="M179.585 140.582H211.888" stroke="#6E55FF" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"/>
						<path opacity="0.2" d="M220.412 310.237H252.715" stroke="#6E55FF" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"/>
						<path opacity="0.2" d="M220.412 319.548H252.715" stroke="#6E55FF" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"/>
						<path opacity="0.2" d="M220.412 328.858H252.715" stroke="#6E55FF" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"/>
					</svg>
				</div>
				<header class="page-header">
					<h1 class="page-title h2 text-center mt-half"><?php esc_html_e( 'Page not found.', 'my-project-partners' ); ?></h1>
				</header><!-- .page-header -->
				<div class="text-center">
					<p><?php esc_html_e( 'Sorry about that! Go back to your dashboard to continue.', 'my-project-partners' ); ?></p>
					<a class="button mt-half" href="<?php echo home_url(); ?>">Go Home</a>
				</div>
				
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->


<?php
get_footer();