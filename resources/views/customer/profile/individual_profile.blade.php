@extends('customer.layouts.app')
@section('title','Individual-Profile')
@section('content')
<!--banner section start here-->
<section class="banner_section_new">
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="banner_title">
				<a href="index.html" class="back-home"><i class="fa fa-home" aria-hidden="true"></i></a>
				<span class="banner-or-set">|</span>
				<h4>My Profile</h4>
			</div>
		</div>
	</div>
</section>
<!--banner section end here-->
<!--profile section start here-->
<section class="main_data_section">
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="common_main_section">
				<div class="profile-datails">
					<div class="profile-img-set">
						<span><img src="{{ asset($customer->profile_pic) }}" class="img-responsive" alt="profile"/></span>
						<div class="profi-details">
							<h4>My Profile</h4>
							<a href="{{ url('edit-profile') }}" class="btn cmn-btn"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Edit Profie</a>
						</div>
					</div>
					<div class="profil_persnal-details">
						<div class="row">
							<div class="col-md-4">
								<div class="profi_pers_data">
									<label>Customer Type :</label>
									<div class="label-deta">Individual</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="profi_pers_data">
									<label>First Name :</label>
									<div class="label-deta">{{$customer->first_name}}</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="profi_pers_data">
									<label>Last Name :</label>
									<div class="label-deta">{{$customer->last_name}}</div>
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="profi_pers_data">
									<label>Title:</label>
									<div class="label-deta">{{$customer->title}}.</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="profi_pers_data">
									<label>Telephone Number :</label>
									<div class="label-deta">{{$customer->telephone_no}}</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="profi_pers_data">
									<label>RSA ID/Identification No. :</label>
									<div class="label-deta">{{$customer->RSA_id_or_passport_no}}</div>
									<div class="passpo_docs">
										<a href="#." data-toggle="modal" data-dismiss="modal" data-target="#Doc_Show">
											<div class="rsaid"><i class="fa fa-eye" aria-hidden="true"></i>
												<img src="{{ asset($customer->upload_RSA_or_passport) }}" alt="img" class="img-responsive">
											</div>
										</a>
									</div>
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="profi_pers_data">
									<label>Email Address :</label>
									<div class="label-deta">{{$user->email}}</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="profi_pers_data">
									<label>Password :</label>
									<div class="label-deta-password">*******</div>
									<a href="#." class="pas-show-eye"><i class="fa fa-eye" aria-hidden="true"></i></a>
									<a href="#." class="change-pas-a" data-toggle="modal" data-target="#Change-password">Change Password</a>
								</div>
							</div>
						</div>
						<div class="common_heading_section">
							<h4>Individual Address</h4>
						</div>
						
						<div class="row">
							<div class="col-md-4">
								<div class="profi_pers_data ">
									<label class="lable_ful_wdh">Country :</label>
									<div class="label-deta">South Africa</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="profi_pers_data ">
									<label class="lable_ful_wdh">Street Address :</label>
									<div class="label-deta">{{$customer->street_address}}</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="profi_pers_data ">
									<label class="lable_ful_wdh">City :</label>
									<div class="label-deta">{{$customer->city->name ?? ''}}</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="profi_pers_data ">
									<label class="lable_ful_wdh">Province :</label>
									<div class="label-deta">{{$customer->state->name ?? ''}}</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="profi_pers_data ">
									<label class="lable_ful_wdh">Zipcode :</label>
									<div class="label-deta">{{$customer->zipcode}}</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@include('customer.layouts.profile_modals')

@stop