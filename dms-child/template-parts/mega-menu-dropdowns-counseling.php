<div class="dropDownColumn">
	<?php
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'counseling-registration' ) || in_array( 18379, get_post_ancestors($post))){
			?>
			<h2><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/folded-newspaper.svg" alt="" />Counseling</h2>
			<?php
		} else {
			?>
			<h3><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/folded-newspaper.svg" alt="" />Counseling</h3>
			<?php
		}
	?>
	<ul>
		<li><a href="<?php echo get_home_url(); ?>/counseling-registration/counseling-center/">Counseling Center</a></li>
		<li><a href="<?php echo get_home_url(); ?>/counseling-registration/find-your-counselor/">Find your Counselor</a></li>
	</ul>

</div>

<div class="dropDownColumn">
	<?php
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'counseling-registration' ) || in_array( 18379, get_post_ancestors($post))){
			?>
			<h2><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/registration.svg" alt="" />Registration</h2>
			<?php
		} else {
			?>
			<h3><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/registration.svg" alt="" />Registration</h3>
			<?php
		}
	?>
	<ul>
		<li><a href="http://dixon.provo.edu/wp-content/uploads/2022/02/22-23-Dixon-Course-Description-.pdf">2022-2023 Dixon Course Description</a></li>
		<li><a href="http://dixon.provo.edu/wp-content/uploads/2022/02/22-23-8th-Registration-Instructions-English.pdf">2022-2023 8th Grade Registration Instructions (English)</a></li>
		<li><a href="http://dixon.provo.edu/wp-content/uploads/2022/02/22-23-8th-Registration-Instructions-Spanish.pdf">2022-2023 8th Grade Registration Instructions (Spanish)</a></li>
		<li><a href="http://dixon.provo.edu/wp-content/uploads/2022/02/2022-2023-English-Utah-Immunization-Requirements-for-7th-Grade-.pdf">2022-2023 English Utah Immunization Requirements for 7th Grade</a></li>
		<li><a href="http://dixon.provo.edu/wp-content/uploads/2022/02/2022-2023-Spanish-Utah-Immunization-Requirements-for-7th-Grade-.pdf">2022-2023 Spanish Utah Immunization Requirements for 7th Grade</a></li>
		<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdEL_r30yB7v9OsfQNZJcspChBFOG2pE1d2K9zLfiAtkC-Vrg/viewform">Summer School Registration Form</a></li>
	</ul>
</div>

<div class="dropDownColumn noheading">
	<?php
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'counseling-registration' ) || in_array( 18379, get_post_ancestors($post))){
			?>
			<h2><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/planning.svg" alt="" />Fees</h2>
			<?php
		} else {
			?>
			<h3><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/planning.svg" alt="" />Fees</h3>
			<?php
		}
	?>
	<ul>
		<li><a href="https://provo.edu/school-fees/dixon-middle/">Fee Schedule</a></li>
		<li><a href="<?php echo get_home_url(); ?>/counseling-registration/school-fees-notice/">School Fees Notice</a></li>
		<li><a href="<?php echo get_home_url(); ?>/counseling-registration/aviso-de-cuotas-escolares/">School Fees Notice (Spanish)</a></li>
		<li><a href="https://provo.edu/wp-content/uploads/2021/07/6160-FeeWaiverApplication7-12.pdf"><span class="hidden">6160 Form 1 </span>Fee Waiver Application</a></li>
		<li><a href="https://provo.edu/wp-content/uploads/2021/07/6160-FeeWaiverApplication7-12Spanish.pdf"><span class="hidden">6160 </span>Solicitud de Exoneracion de Cuotas</a></li>
		<li><a href="https://provo.aliohost.net:7443/AlioFeePay_PSD/Account/Login">Pay School Fees</a></li>
	</ul>
</div>
