@extends('admin.dashboard.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="content">
                <div class="container-fluid">
                  <div>
                    <h1 style="display:inline-block;">
                      FAQS      </h1>
                    <h3 class="box-title" style="display:inline-block;">List</h3>
                  </div>
                  <a class="btn btn-info" href="http://myprojectstaging.com/custom/whocares_dev/admin/faqs/add">Add New</a>
                  <hr style="border-top: 1px solid #504444;">
                  <div class="col-md-12">
                    <div class="box-body">
                     <table id="table_id" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <td style="text-align: center;">S.no</td>
                          <td style="text-align: center;">Faqs Heading</td>
                          <td style="text-align: center;">Faqs Description</td>
                          <td style="text-align: center;">Actions</td>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td style="text-align: center;">1</td>
                          <td style="text-align: center;">Is this a paid service?</td>
                          <td style="text-align: center;"><p>Our services are free of cost and are here to serve a bigger purpose. We do not care about money, we want to be able to help people. If you have been inflicted with a terrible turn of events or are going through a positive life change, your family and friends should be there to support you. We want to link loved ones together, especially in their time of need and we do this free of charge.</p>
              </td>
                          <td style="text-align: center;">
                            <a href="http://myprojectstaging.com/custom/whocares_dev/admin/faqs/edit/1"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></span></a>
                            <a href="http://myprojectstaging.com/custom/whocares_dev/admin/faqs/delete/1"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                          </td>
                        </tr>

                        <tr>
                          <td style="text-align: center;">2</td>
                          <td style="text-align: center;">How can I sign up to avail your services?</td>
                          <td style="text-align: center;"><p>There are two ways you can sign up for our services:&nbsp;<br />
              i) If you are a patient in need of help then you can set up your profile on our site and have it on standby in case there is a need for immediate help<br />
              ii) If you are a concerned loved one or family member you can sign up and respond to a patient&rsquo;s request for assistance, whether in need or celebration and be there for their help<br />
              Once you have signed up, we will link you to another family and build a strong community of helpful people.</p>
              </td>
                          <td style="text-align: center;">
                            <a href="http://myprojectstaging.com/custom/whocares_dev/admin/faqs/edit/2"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></span></a>
                            <a href="http://myprojectstaging.com/custom/whocares_dev/admin/faqs/delete/2"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                          </td>
                        </tr>

                        <tr>
                          <td style="text-align: center;">3</td>
                          <td style="text-align: center;">I am worried about my friend/relative as they are going through a tough time and I want to help. What can I do?</td>
                          <td style="text-align: center;"><p>We will provide you with everything you need to make sure your loved one is being taken care of. Once you understand what they are going through, you can look through the kind of help we offer and choose the one that best suits your needs. You will be able to reach your loved one any time they need you and give them they full support they require during their hardship.</p>
              </td>
                          <td style="text-align: center;">
                            <a href="http://myprojectstaging.com/custom/whocares_dev/admin/faqs/edit/3"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></span></a>
                            <a href="http://myprojectstaging.com/custom/whocares_dev/admin/faqs/delete/3"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                          </td>
                        </tr>

                        <tr>
                          <td style="text-align: center;">4</td>
                          <td style="text-align: center;">How can I sign up for your registry?</td>
                          <td style="text-align: center;"><p>You can go to our Registry page and fill in the form with all the relevant details. Once we have your basic information, you can then make your selection according to the event you are having.</p>
              </td>
                          <td style="text-align: center;">
                            <a href="http://myprojectstaging.com/custom/whocares_dev/admin/faqs/edit/5"><span class="edit_icon"><i class="fas fa-pencil-alt"></i></span></a>
                            <a href="http://myprojectstaging.com/custom/whocares_dev/admin/faqs/delete/5"><span class="delete_icon"><i class="fa fa-trash" aria-hidden="true"></i></span></a>
                          </td>
                        </tr>

                                </tbody>
                    </table>
                  </div>
                  <div class="box-footer">
                    <a href="http://myprojectstaging.com/custom/whocares_dev/admin" class="btn btn-danger">Dashboard</a>
                  </div>
                </div>
              </div>
              </div>
        </div>
	</div>
@endsection
