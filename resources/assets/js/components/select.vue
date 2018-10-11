<template>
	<select class="form-control">
		<slot></slot>
	</select>
</template>

<script>
	import Select2 from 'select2';
	export default {
		props: ['options', 'value'],
		mounted: function () {
			var vm = this
			$(this.$el)
			// init select2
			.select2({data: this.options})
			.val(this.value)
			.trigger('change')
			//emit event on change
			.on('change', function () {
				em.$emit('input', this.value)
			})
		},
		watch: {
			value: function (value) {
				//update value
				$(this.$el).val(value).trigger('change');
			},
			options: function (options) {
				// update options
				$(this.$el).empty().trigger('change').select2({data: options})
			}
		},
		destoyed: function () {
			$(this.$el).off().select2('destoy')
		}
	}
</script>
<style>
	select{ width: 100%; }
</style>