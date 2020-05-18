<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light chat-fixed-name">
            <div class="navbar-brand">
                Asad Mukhtar
            </div>
        </nav>
        <div>
          <section class="chat-app-window">
                <div class="chats">  
                        <br /> <br />
                        <ul class="list-group" style="margin-top:9px;">
                          <div v-for="value in chat.message" class="chat-div col-sm-12">
                               <li class="list-group-item chat-list" :class='ReceiverClass'  
                                :key=value.index
                              >
                                <div class="d-flex flex-row-reverse">
                                  <div>
                                      <span> {{ value }} </span>
                                  </div>    
                                </div>
                              </li>
                              <small class="badge float-right badge-info">You</small>
                              <!--
                              <li class="list-group-item chat-list" :class='SenderClass'  
                                :key=value.index
                              >
                                <div>
                                   <label>
                                        <img class="media-object rounded-circle chat-image" src="images/2u.png" height="40" width="40">
                                        <b> Ali Haider: </b>
                                    </label>
                                    <span> {{ value }} </span>
                                </div>  
                              </li>
                              -->
                            <!--
                              <small class="badge float-right badge-success">You</small>
                            -->
                          </div>
                        </ul>
                </div>
          </section>
          <section class="chat-app-form" style="margin-top:5px !important;">
                <div class="chat-app-input d-flex">
                  <fieldset class="form-group position-relative has-icon-left col-10 m-0">
                    <div class="form-control-position">
                      <i class="icon-emoticon-smile"></i>
                    </div>
                    <input type="text" class="form-control" placeholder="Type your message" v-model='message' @keyup.enter='send'  />
                  </fieldset>
                  <fieldset class="form-group position-relative has-icon-left col-2 m-0">
                    <button type="button" class="btn btn-primary"><i class="fa fa-paper-plane-o d-lg-none"></i>
                      <span class="d-none d-lg-block">Send</span>
                    </button>
                  </fieldset>
                </div>
          </section>
        </div>
    </div>
</template>
 <style type="text/css">
   .list-group-item-col {
    background-color:#AED6F1 !important;
    margin-top: 10px !important;
   }
   .chat-list {
    border-radius:2% !important;
    margin-top:5px !important;
   }
   .chat-div {
    margin-top:5px !important;
   }

   .chat-image {

   }
 </style>
<script>
    export default {
        props: [
            'color'
        ],

        computed: {
            SenderClass(){
                return 'list-group-item-col';
            },

            ReceiverClass(){
              return 'list-group-item-default';
            }

        },

        data () {
            return{
                message:'',
                chat:{
                    message:[],        
                },
            }
        },

        methods: {
            send(){
                if(this.message.length != 0){
                    //console.log(this.message);
                    this.chat.message.push(this.message);
                    this.message = ''
                }
            }
        }
    };
</script>