<?php $this->load->view('header'); ?>
<div data-elementor-type="wp-page" data-elementor-id="13634" class="elementor elementor-13634" data-elementor-settings="[]">
	<div class="elementor-section-wrap">
		<section class="elementor-section elementor-top-section elementor-element elementor-element-1fd447e elementor-section-boxed elementor-section-height-default elementor-section-height-default shadepro-adv-gradient-no shadepro-sticky-no" data-id="1fd447e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shadepro_sticky&quot;:&quot;no&quot;}">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-602525b" data-id="602525b" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1631fd3 shadepro-sticky-no elementor-widget elementor-widget-heading" data-id="1631fd3" data-element_type="widget" data-settings="{&quot;shadepro_sticky&quot;:&quot;no&quot;}" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default">Nos Packs Marketing</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

				<section class="elementor-section elementor-top-section elementor-element elementor-element-1fd447e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1fd447e" data-element_type="section">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-602525b" data-id="602525b" data-element_type="column">
					<div class="row">
<?php
		$sql = "SELECT * FROM tblproduct_master";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
			
		?>
				<div class="col-3" style="padding-top:15px;">
				<div class="card" style="width: 18rem;">
				<p><?php echo $row->product_name?></p>
					<img src="<?php echo base_url("/modules/products/uploads/" . $row->product_image); ?>">
					<div class="card-body">
						<p class="card-text"><?php echo $row->product_description ?></p>
						<span class="h2"><?php echo $row->rate." <sup>EUR</sup>";?> <a class="btn btn-sm btn-warning" href="/login">Login</a></span>
					</div>
				</div>
		<?php
			}
		}
		?>


	</div>
	</div>
		</section>


	</div>
</div>
<?php $this->load->view('footer'); ?>