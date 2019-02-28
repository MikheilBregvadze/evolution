<template>
	<div>
		{{count.toLocaleString().split(/\,/).join(' ')}}
	</div>
</template>

<script>

export default{
	props: ['to'],
	data(){
		return{
			count: 0,
			interval: null,
			increment: 1,
		}
	},
	mounted(){
		//console.log(document.querySelector('.countup').offsetTop )
		this.increment = Math.ceil(this.to / 30)
		this.interval = setInterval(this.tick, 100);
	},
	methods:{
		tick(){
			if(this.count < this.to){
				return this.count += this.increment;
			}
			clearInterval(this.interval)
		}
	},
	 created () {     
	   window.addEventListener('scroll', this.handleScroll);      
	 },
	 destroyed () {
	   window.removeEventListener('scroll', this.handleScroll);
	}
}

</script>

