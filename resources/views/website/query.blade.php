@extends('website.layouts.app')
 
@section('website.content')


<!-- form start -->
<div class="container">
    <div class="row mt-3">
        <div class="col-lg-6">
            <h4 class="slider_heading">Solar Query - Get a Free Consultation</h4> 
            <h5>Why Fill This Form?</h5>
            <ul>
                <li>✔ Get a free solar consultation from experts.</li>
                <li>✔ Find out how much you can save on electricity bills.</li>
                <li>✔ Check your eligibility for government subsidies.</li>
            </ul>
           
        </div>
        <div class="col-lg-6">
            <img src="website/assets/img/query-img.webp" alt="query-image" class="img-fluid">

        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-12">
           
            <form class="p-4 rounded shadow-lg bg-light" action="{{url('querys')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2 class="text-center text-primary fw-bold">☀️ Solar Query Form</h2>
                <hr class="mb-4">

                <!-- First Name -->
                <div class="mb-3">
                    <label for="fname" class="fw-bold">First Name :-</label>
                    <input type="text" class="form-control border-0 shadow-sm p-2" name="fname" placeholder="Enter first name">
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="fw-bold">Email :-</label>
                    <input type="email" class="form-control border-0 shadow-sm p-2" name="email" placeholder="Enter your email">
                </div>

                <!-- Address -->
                <div class="mb-3">
                    <label for="address" class="fw-bold">Address :-</label>
                    <input type="text" class="form-control border-0 shadow-sm p-2" name="address" placeholder="Enter your address">
                </div>

                <!-- Phone Number -->
                <div class="mb-3">
                    <label for="number" class="fw-bold">Phone Number :-</label>
                    <input type="number" class="form-control border-0 shadow-sm p-2" name="mobilenumber" placeholder="Enter phone number">
                </div>

                <!-- Upload Image -->
                <div class="mb-3">
                    <label for="image" class="fw-bold">Upload Image :-</label>
                    <input type="file" class="form-control border-0 shadow-sm p-2" name="image">
                </div>

                <!-- House Size -->
                <div class="mb-3">
                    <label for="house_size" class="fw-bold">House Size :-</label>
                    <select class="form-select border-0 shadow-sm p-2" name="house_size">
                        <option value="">Select House Size</option>
                        <option value="3 Marla">3 Marla (~80 Gaz)</option>
                        <option value="4 Marla">4 Marla (~100 Gaz)</option>
                        <option value="5 Marla">5 Marla (~125 Gaz)</option>
                        <option value="10 Marla">10 Marla (~250 Gaz)</option>
                        <option value="1 Kanal">1 Kanal (~500 Gaz)</option>
                        <option value="2 Kanal">2 Kanal (~1000 Gaz)</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <!-- Roof Type -->
                <div class="mb-3">
                    <label for="roof_type" class="fw-bold">Roof Type :-</label>
                    <select class="form-select border-0 shadow-sm p-2" name="roof_type">
                        <option value="">Select Roof Type</option>
                        <option value="Concrete">Concrete</option>
                        <option value="Tin Shed">Tin Shed</option>
                        <option value="Tiles">Tiles</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <!-- Average Daily Electricity Usage -->
                <div class="mb-3">
                    <label for="light_avg" class="fw-bold">Average Daily Electricity Usage :-</label>
                    <select class="form-select border-0 shadow-sm p-2" name="light_avg">
                        <option value="">Select Light Usage</option>
                        <option value="5 kWh">5 kWh (Small Home - Basic Load)</option>
                        <option value="10 kWh">10 kWh (Medium Home - Fans, Lights, TV)</option>
                        <option value="15 kWh">15 kWh (Large Home - AC, Fridge, Geyser)</option>
                        <option value="25 kWh">25 kWh (Villa - Heavy Appliances & ACs)</option>
                        <option value="50 kWh">50+ kWh (Industrial or High-End Home)</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <!-- Monthly Electricity Bill -->
                <div class="mb-3">
                    <label for="monthly_bill" class="fw-bold">Monthly Electricity Bill :-</label>
                    <select class="form-select border-0 shadow-sm p-2" name="monthly_bill">
                        <option value="">Select Monthly Bill</option>
                        <option value="2000">Less than ₹2000</option>
                        <option value="2000-5000">₹2000 - ₹5000</option>
                        <option value="5000-10000">₹5000 - ₹10,000</option>
                        <option value="10000+">More than ₹10,000</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <!-- Backup Battery Needed -->
                <div class="mb-3">
                    <label class="fw-bold">Do you need a backup battery?</label>
                    <div>
                        <input type="radio" name="battery_backup" value="Yes"> Yes
                        <input type="radio" name="battery_backup" value="No"> No
                    </div>
                </div>

                <!-- Solar System Type -->
                <div class="mb-3">
                    <label for="solar_type" class="fw-bold">Type of Solar System :-</label>
                    <select class="form-select border-0 shadow-sm p-2" name="solar_type">
                        <option value="">Select System Type</option>
                        <option value="On-Grid">On-Grid (Without Battery, Direct to Grid)</option>
                        <option value="Off-Grid">Off-Grid (With Battery, Independent System)</option>
                        <option value="Hybrid">Hybrid (With Battery & Grid Connection)</option>
                    </select>
                </div>

                <!-- Preferred Contact Time -->     
                
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-lg w-100 shadow-sm fw-bold mt-3" name="submit">🚀 Submit</button>
            </form>
        </div>
    </div>
</div>


 <!--form end  -->


@endsection