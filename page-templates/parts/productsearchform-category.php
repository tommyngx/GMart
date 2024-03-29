<?php if ( greenmart_tbay_get_config('show_searchform') ): ?>

	<div class="tbay-search-form is-category">
		<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
			<div class="form-group">
				<div class="input-group">
					<?php if ( greenmart_tbay_get_config('search_type') != 'all' ): ?>
						<div class="select-category input-group-addon">
							<?php if ( greenmart_tbay_get_config('search_type') == 'product' ):
								$args = array(
								    'show_counts' => false,
								    'hierarchical' => true,
								    'show_uncategorized' => 0
								);
							?>
							    <?php wc_product_dropdown_categories( $args ); ?>

							<?php elseif ( greenmart_tbay_get_config('search_type') == 'post' ):
								$args = array(
									'show_option_all' => esc_html__( 'All categories', 'greenmart' ),
								    'show_counts' => false,
								    'hierarchical' => true,
								    'show_uncategorized' => 0,
								    'name' => 'category',
									'id' => 'search-category', 
									'class' => 'postform dropdown_product_cat',
								);
							?>
								<?php wp_dropdown_categories( $args ); ?>
							<?php endif; ?>
					  	</div>
				  	<?php endif; ?>
				  		<input type="text" placeholder="<?php esc_html_e( 'I&rsquo;m searching for...', 'greenmart' ); ?>" name="s" class="tbay-search form-control input-sm"/>
						<div class="tbay-preloader"></div>
						<div class="button-group input-group-addon">
							<button type="submit" class="button-search btn btn-sm"><i class="icofont icofont-search-alt-1"></i><?php esc_html_e( 'Search', 'greenmart' ); ?> </button>
						</div>
					<?php if ( greenmart_tbay_get_config('search_type') != 'all' ): ?>
						<input type="hidden" name="post_type" value="<?php echo greenmart_tbay_get_config('search_type'); ?>" class="post_type" />
					<?php endif; ?>
				</div>
				
			</div>
		</form>
	</div>

<?php endif; ?>