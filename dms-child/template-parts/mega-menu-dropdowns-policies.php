<div class="dropDownColumn">
					<?php
						//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
						if(is_page( 'policies-forms' ) || in_array( 43027, get_post_ancestors($post))){
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
						</ul>
				</div>
				<div class="dropDownColumn">
					<?php
						//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
						if(is_page( 'policies-forms' ) || in_array( 43027, get_post_ancestors($post))){
							?>
							<h2><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/procedures1.svg" alt="" />Procedures</h2>
							<?php
						} else {
							?>
							<h3><img src="https://dixon.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/procedures1.svg" alt="" />Procedures</h3>
							<?php
						}
					?>

						<ul>

						</ul>
				</div>
				<div class="dropDownColumn">
					<?php
						//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
						if(is_page( 'policies-forms' ) || in_array( 43027, get_post_ancestors($post))){
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


						</ul>
				</div>
