				<div class="dropDownColumn">
					<?php
						//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
						if(is_page( 'policies-forms' ) || in_array( 18415, get_post_ancestors($post))){
							?>
							<h2><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/policy.svg" alt="" />Policies</h2>
							<?php
						} else {
							?>
							<h3><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/policy.svg" alt="" />Policies</h3>
							<?php
						}
					?>
					<ul>
						<li><a href="https://dixon.provo.edu/wp-content/uploads/2021/07/Dixon-Student-Handbook-21-22.pdf">Student Handbook</a></li>
						<li><a href="<?php echo get_home_url(); ?>/policies-forms/after-school-program-rules-and-policies/">After School Program Rules and Policies</a></li>
						<li><a href="<?php echo get_home_url(); ?>/policies-forms/dress-grooming-standards/">Dress and Grooming Standards</a></li>
					</ul>
				</div>
				<div class="dropDownColumn">
					<?php
						//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
						if(is_page( 'policies-forms' ) || in_array( 18415, get_post_ancestors($post))){
							?>
							<h2><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/form.svg" alt="" />Forms</h2>
							<?php
						} else {
							?>
							<h3><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/form.svg" alt="" />Forms</h3>
							<?php
						}
					?>
					<ul>
						<li><a href="https://www.myschoolapps.com/">Application for Free and Reduced Meals</a></li>
						<li><a href="https://drive.google.com/file/d/0B-HbeleIpshoNndWcDlCNExBNW8/edit?pli=1&resourcekey=0-TnvDMZW40-jX4eAKbKel6g">Summer School Registration Form</a></li>
						<li><a href="https://dixon.provo.edu/wp-content/uploads/2014/12/SCC-Nomination-Form-for-Election-2016-2017.pdf">School Community Council Candidate Form</a></li>
						<li><a href="http://dixon.provo.edu/wp-content/uploads/2021/11/Job-Shadow-Agreement.pdf">Job Shadow Agreement Form</a></li>

					</ul>

				</div>
				<div class="dropDownColumn">
					<ul>
						<li><a href="https://dixon.provo.edu/wp-content/uploads/2021/02/2021-2022-Immunization-Requirements.pdf">2021-2022 Immunization Requirements Form</a></li>
						<li><a href="https://dixon.provo.edu/wp-content/uploads/2021/02/2021-2022-Vacunas.pdf">2021-2022 Immunization Requirements Form (Spanish)</a></li>
						<li><a href="http://dixon.provo.edu/wp-content/uploads/2015/02/Residency-Questionnaire.pdf">Student Residency Questionnaire</a></li>
					</ul>
				</div>
