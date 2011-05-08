		<!-- menu -->
		<nav class="grid_2" id="menu">
			<ul>
				<li><a href="/build">
					<span class="menupunkt"><txp:text item="sct_order" /></span>
					<span class="menubeschr"><txp:text item="sct_order_sub" /></span>
				</a></li>
				<li><a href="/gallery"<txp:if_section name="gallery"> class="active"</txp:if_section>>
					<span class="menupunkt"><txp:text item="sct_gallery" /></span>
					<span class="menubeschr"><txp:text item="sct_gallery_sub" /></span>
				</a></li>
				<li><a href="/blog"<txp:if_section name="blog"> class="active"</txp:if_section>>
					<span class="menupunkt"><txp:text item="sct_blog" /></span>
					<span class="menubeschr"><txp:text item="sct_blog_sub" /></span>
				</a></li>
				<li><a href="/faq"<txp:if_section name="faq"> class="active"</txp:if_section>>
					<span class="menupunkt"><txp:text item="sct_faq" /></span>
					<span class="menubeschr"><txp:text item="sct_faq_sub" /></span>
				</a></li>
				<li><a href="/about"<txp:if_section name="about"> class="active"</txp:if_section>>
					<span class="menupunkt"><txp:text item="sct_about" /></span>
					<span class="menubeschr"><txp:text item="sct_about_sub" /></span>
				</a></li>
			</ul>
		</nav>
		<!-- end of menu -->