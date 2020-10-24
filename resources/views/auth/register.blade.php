@extends('layouts.head')
@section('css')
 <link rel="stylesheet" href="{{ asset('home/assets/css/gijgo.min.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background:green !important; color: white;">
                    <i class="fa fa-user"></i> 
                    <b> {{ __('Sign Up') }} </b>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="fname" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" placeholder="First Name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="lname" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" placeholder="Last Name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input  type="password" class="form-control" name="password_confirmation" placeholder="password confirmation" required>
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-md-12">
                                <select id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required autofocus>
                                  <option class="text-capitalize">Select country</option>
                                  @foreach($country as $c)
                                   <option value="{{ $c->id }}" class="text-capitalize">{{ $c->name }}</option>
                                  @endforeach
                                </select>
                                @if ($errors->has('country'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <select id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" required autofocus>
                                  <option value="0">State</option>
                                </select>
                                @if ($errors->has('state'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-md-12">
                                <select id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>
                                    <option value="0">City</option>
                                </select>
                                @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 row" style="padding-left:30px;">
                                <label class="text-md-right">Date of birth</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" autocomplete="off" name="dob" id="dob">
                            </div>
                            @if ($errors->has('dob'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 row">
                                <div class="col-md-1"></div>
                                <div class="col-md-3" style="margin-top:5px;">
                                    <label><b><font size="3">I am</font></b></label>
                                </div>
                                <div class="col-md-3" style="margin-top:5px;">
                                <i class="fa fa-male"></i> 
                                Male <input type=radio name="gender" value="male" />
                                </div>
                                <div class="col-md-3" style="margin-top:5px;">
                                    <i class="fa fa-female"></i>
                                female <input type=radio name="gender" value="female" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">
                                <font size="3"><b> Select Plans </b></font>
                            </label>
                            <div class="col-md-2" style="margin-top:5px;">
                                Gold
                                <input type=radio name="plan" value="gold" />
                            </div>
                            <div class="col-md-3" style="margin-top:5px;">
                                Platinum
                                <input type=radio name="plan" value="platinum" />
                            </div>
                            <div class="col-md-3" style="margin-top:5px;">
                                Diamond
                                <input type=radio name="plan" value="diamond" />
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success">
                                   <i class="fa fa-user"></i> {{ __('Sign Up') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">Kunnec.com Terms of Use</h4>
                            </div>          
                            <!-- Modal body -->
                            <div class="modal-body">
                                <font color="black">
                                PLEASE READ THE TERMS AND CONDITIONS OF USE CAREFULLY BEFORE USING THIS SITE. This site is free to use by our visitors. And by using this site, you the user are agreeing to comply with and be bound by the following terms of use. After reviewing the following terms and conditions thoroughly, if you do not agree to the terms and conditions, please do not use this site.
                                        Acceptance of Agreement. You agree to the terms and conditions outlined in this Terms and Conditions of use Agreement (Agreement) with respect to our site (the Site). This Agreement constitutes the entire and only agreement between us and you, and supersedes all prior or contemporaneous agreements, representations, warranties and understandings with respect to the Site, the content, free product samples or freebie offers or services provided by or listed on the Site, and the subject matter of this Agreement. This Agreement may be amended by us at any time and at any frequency without specific notice to you. The latest Agreement will be posted on the Site, and you should review this Agreement prior to using the Site.
                                        Copyright. The content, organization, graphics, design, and other matters related to the Site are protected under applicable copyrights and other proprietary laws, including but not limited to intellectual property laws. The copying, reproduction, use, modification or publication by you of any such matters or any part of the Site is strictly prohibited, without our express prior written permission.
                                        Deleting and Modification. We reserve the right in our sole discretion, without any obligation and without any notice requirement to you, to edit or delete any documents, information or other content appearing on the Site, including this Agreement.
                                        Indemnification. You agree to indemnify, defend and hold us, our officers, our share holders, our partners, attorneys and employees harmless from any and all liability, loss, damages, claim and expense, including reasonable attorney's fees, related to your violation of this Agreement or use of the Site.
                                        Disclaimer. THE CONTENT, SERVICES, FREE PRODUCT SAMPLES AND FREEBIE OFFERS FROM OR LISTED THROUGH THE SITE ARE PROVIDED "AS-IS," "AS AVAILABLE," AND ALL WARRANTIES, EXPRESS OR IMPLIED, ARE DISCLAIMED, INCLUDING BUT NOT LIMITED TO THE DISCLAIMER OF ANY IMPLIED WARRANTIES OF TITLE, NON-INFRINGEMENT, MERCHANTABILITY, QUALITY AND FITNESS FOR A PARTICULAR PURPOSE, WITH RESPECT TO THIS SITE AND ANY WEBSITE WITH WHICH IT IS LINKED. THE INFORMATION AND SERVICES MAY CONTAIN BUGS, ERRORS, PROBLEMS OR OTHER LIMITATIONS. WE HAVE NO LIABILITY WHATSOEVER FOR YOUR USE OF ANY INFORMATION OR SERVICE. IN PARTICULAR, BUT NOT AS A LIMITATION, WE ARE NOT LIABLE FOR ANY INDIRECT, INCIDENTAL OR CONSEQUENTIAL DAMAGES (INCLUDING DAMAGES FOR LOSS OF BUSINESS, LOSS OF PROFITS, LOSS OF MONEY, LITIGATION, OR THE LIKE), WHETHER BASED ON BREACH OF CONTRACT, BREACH OF WARRANTY, NEGLIGENCE, PRODUCT LIABILITY OR OTHERWISE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. THE NEGATION OF DAMAGES SET FORTH ABOVE ARE FUNDAMENTAL ELEMENTS OF THE BASIS OF THE BARGAIN BETWEEN US AND YOU THE USER. THIS SITE AND THE INFORMATION WOULD NOT BE PROVIDED WITHOUT SUCH LIMITATIONS. NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY YOU FROM US THROUGH THE SITE SHALL CREATE ANY WARRANTY, REPRESENTATION OR GUARANTEE NOT EXPRESSLY STATED IN THIS AGREEMENT. THE INFORMATION AND ALL OTHER MATERIALS ON THE SITE ARE PROVIDED FOR GENERAL INFORMATION PURPOSES ONLY AND DO NOT CONSTITUTE PROFESSIONAL ADVICE. IT IS YOUR RESPONSIBILITY TO EVALUATE THE ACCURACY AND COMPLETENESS OF ALL INFORMATION AVAILABLE ON THIS SITE OR ANY WEBSITE WITH WHICH IT IS LINKED.
                                        Limits. All responsibility or liability for any damages caused by viruses contained within the electronic file containing the form or document is disclaimed. We will not be liable to you for any incidental, special or consequential damages of any kind that may result from use of or inability to use the site.
                                        Third-Party Website. All rules, terms and conditions, other policies (including privacy policies) and operating procedures of third-party linked websites will apply to you while on such websites. We are not responsible for the content, accuracy or opinions express in such Websites, and such Websites are not investigated, monitored or checked for accuracy or completeness by us. Inclusion of any linked Website on our Site does not imply approval or endorsement of the linked Website by us. This Site and the third-party linked websites are independent entities and neither party has authority to make any representations or commitments on behalf of the other. If you decide to leave our Site and access these third-party linked sites, you do so at your own risk.
                                        Third-Party Products and Services. We advertise third-party linked websites from which you may purchase or otherwise obtain certain sample goods, freebie offerings or free trial services. You understand that we do not operate or control the products, free offerings or services offered by third-party linked websites. Third-party linked websites are responsible for all aspects of order processing, fulfillment, billing and customer service. We are not a party to the transactions entered into between you and third-party linked websites. You agree that use of such third-party linked websites is at your sole risk and is without warranties of any kind by us, expressed, implied or otherwise. Under no circumstances are we liable for any damages arising from the transactions between you and third-party linked websites or for any information appearing on third-party linked websites or any other site linked to or from our site.
                                        Submissions. All suggestions, ideas, notes, concepts and other information you may send to us (collectively, "Submissions") shall be deemed and shall remain our sole property and shall not be subject to any obligation of confidence on our part. Without limiting the foregoing, we shall be deemed to own all known and hereafter existing rights of every kind and nature regarding the Submissions and shall be entitled to unrestricted use of the Submissions for any purpose, without compensation to the provider of the Submissions.
                                        General. You agree that all actions or proceedings arising directly or indirectly out of this agreement, or your use of the site or any sample products, freebie offers or services obtained by you through such use, shall be litigated in the circuit court of Los Angeles County, California or the United States District Court for the Central District of California. you are expressly submitting and consenting in advance to such jurisdiction in any action or proceeding in any of such courts, and are waiving any claim that Los Angeles, California or the central district of California is an inconvenient forum or an improper forum based on lack of venue. This site is controlled by Perfect Insight, Inc. in the State of California, USA. As such, the laws of California will govern the terms and conditions contained in this Agreement and elsewhere throughout the Site, without giving effect to any principles of conflicts of laws.
                                    
                                    </font>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                    <input type="radio" name="sex" id="inlineCheckbox1" value="male">
                                    <span class="font-black">I agee with kunnec.com terms.</span>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="{{ asset('home/assets/lib/bootstrap-datepicker/gijgo.min.js') }}"></script>
<script>
    ajaxStatesUrl = "{{ url('/states/') }}";
    ajaxCitiesUrl = "{{ url('/cities/') }}";
</script>
@endsection