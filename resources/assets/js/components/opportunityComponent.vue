<template>
	<div class="col-lg-12">
		<!-- Start Card -->
			<h2> <i class="fa fa-tasks" aria-hidden="true"></i> Opportunities </h2>
			<hr />
			<div class="card" v-for="(opprtunity, index) in opportunities">
				<div class="card-header">
					<b> <i class="fa fa-tasks" aria-hidden="true"></i>  {{ opprtunity.title }} </b>
				</div>
				<div class="card-body">
					 {{ opprtunity.description }}
					 <br />
					 <button class="btn btn-info float-right"> <i class="fa fa-arrow-right"></i> Continue..</button>
				</div>
				<div class="card-footer">
					<ul class="opportunity-list">
						<li class="op-list"><b> <i class="fa fa-calendar"></i> 12-010-2019 </b></li>
						<li class="op-list"><b> <i class="fa fa fa-clock-o"></i> 10 Mints Ago</b></li>
						<li class="op-list"><b> <i class="fa fa-eye"></i> Views </b></li>
						<li class="op-list"> 
							<button class="btn btn-danger"  v-on:click="del(opprtunity.id ,index)">
								<i class="fa fa-trash"></i>
							</button> 
						</li>
					</ul>
				</div>
			</div>
		<!-- End Card   -->
	</div>
</template>
<script type="text/javascript">
	
	export default { 
  	  	data(){
  	  		return {
  	  			opportunities:[]
  	  		};
  	  	},
  	  	created(){
  	  		axios.get('/api/ktm/opprtunity').then(
	            response => this.opportunities = response.data
	        );	
  	  	},
  	  	methods:{
  	  		del(id,index){
  	  			 //var id = event; 
  	  			 console.log(id);
  	  			 this.opportunities.splice(index, 1);
  	  			 axios.delete('/api/ktm/delete/'+id).then(
	  	  			 	toast.fire({
		                    type: 'success',
		                    title: 'job posted Successfully in kunnec to me'
		                })
  	  			 );
  	  		}
  	  	}	  	

  	};

</script>