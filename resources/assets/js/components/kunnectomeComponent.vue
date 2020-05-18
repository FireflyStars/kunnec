<template>
      <div class="col-lg-12">
            <div class="well">
                  <h2>Post a job </h2>
                  <hr />

                  <form @submit.prevent="ktm" @keydown="form.onKeydown($event)">
                        <div class="form-goup">
                              <label> 
                                    <b> Job Title </b> 
                              </label>
                              <input type="text" class="form-control" placeholder="Job Title" name="title" v-model="form.title" :class="{ 'is-invalid': form.errors.has('title') }"  />
                              <has-error :form="form" field="title"></has-error>
                        </div>
                        <div class="form-group">
                              <label> <b> Description </b> </label>
                              <textarea id="text-editor" placeholder="Enter text ..." class="form-control" rows="10" style="resize: none;" name="description" v-model="form.description" :class="{ 'is-invalid': form.errors.has('description') }" >
                              </textarea>
                              <has-error :form="form" field="title"></has-error>
                        </div> <br/>
                        <div class="form-group">
                              <div class="row">
                                    <div class="col-lg-6">
                                          <label><b>Category </b> </label>
                                          <select id="category" class="form-control" name="category" v-model="form.category" :class="{ 'is-invalid': form.errors.has('category') }" @change="change($event)">
                     
                                                <option v-for="category in categories" v-bind:value="category.id">
                                                      {{ category.name }}
                                                </option>
                                          
                                          </select>
                                          <has-error :form="form" field="category"></has-error>      
                                    </div>
                                    <div class="col-lg-6" id="subcategorytitle">
                                          <label><b>Sub Category </b> </label>
                                          <select id="subcategory" class="form-control" name="subcategory" v-model="form.subcategory" :class="{ 'is-invalid': form.errors.has('subcategory') }">
                                     
                                               <option v-for="subcategory in subcategories" v-bind:value="subcategory.id">
                                                     {{ subcategory.name }}
                                               </option> 
                                          </select>
                                          <has-error :form="form" field="category"></has-error>
                                    </div>
                              </div>
                        </div>
                        <div class="form-group">
                              <label> <b> Skills </b> </label>
                              <input type="text"class="form-control" placeholder="Skills" name="skill" v-model="form.skill" :class="{ 'is-invalid': form.errors.has('skill') }" />
                              <has-error :form="form" field="skill"></has-error>
                        </div> <br/>    
                        <!--  
                        <div class="form-group">
                              <label><b> Upload Documention </b></label> <br />
                              <input type="file" name="image" />
                        </div>
                        -->
                        <div class="form-group">
                              <div class="row">
                                    <div class="col-lg-6">
                                          <label><b> Job type </b> </label>
                                          <select class="form-control" name="jtype" v-model="form.jtype" :class="{ 'is-invalid': form.errors.has('jtype') }">
                                                <option>Job Type</option>
                                                <option value="hourly"> Hourly </option>
                                                <option value="monthly"> Monthly </option>
                                          </select>
                                          <has-error :form="form" field="jtype"></has-error>
                                    </div>
                                    <div class="col-lg-6">
                                          <div>
                                                <label>Salary</label>
                                                <input type="text" name="salary" class="form-control"  placeholder="$" v-model="form.salary" :class="{ 'is-invalid': form.errors.has('salary') }" />
                                                <has-error :form="form" field="salary"></has-error>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="form-group">
                              <label><b> Last Date for apply </b></label>
                              <input type="date" id="date" class="form-control" name="ldate" v-model="form.ldate" :class="{ 'is-invalid': form.errors.has('ldate') }" />
                              <has-error :form="form" field="ldate"></has-error>
                        </div>
                        <div class="form-group">
                              <button type="submit" class="btn btn-danger float-right">
                                    Post Job
                              </button>
                        </div>
                  </form>
            </div>
      </div>
</template>
<script type="text/javascript">
      export default { 
            data() {
                  return {
                        categories:[],
                        subcategories:[],
                        form: new Form({
                              title:'',
                              description:'',
                              category:'',
                              subcategory:'',
                              skill:'',
                              jtype:'',
                              rate:''
                        })
                  }
            },
            created(){
                  axios.get('api/catagories').then(
                        response => this.categories = response.data
                  );
            },

            methods:{
                  ktm(event){
                        this.form.post('api/ktm/jobpost').then(function(response){
                              toast.fire({
                                type: 'success',
                                title: 'job posted Successfully in kunnec to me'
                              });
                              event.target.reset();
                        }).catch(function (error) {
                          //console.log(error);
                          //currentObj.output = error;
                        
                        });
                  },
                  change(event){
                       var id = event.target.value; 
                       console.log("sdf");
                       axios.get('api/catagories/'+id).then(
                              response => this.subcategories = response.data
                        );
                  }
            }


      };

</script>