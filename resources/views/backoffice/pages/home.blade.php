@extends('backoffice/templates/mainBack')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom de la Table</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Navbar</th>
                    <td><a class="btn btn-primary" href="/back-navbar">Show</a></td>
                </tr>
                <tr>
                    <th scope="row">Titre</th>
                    <th><a class="btn btn-primary" href="/back-title">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">About Description</th>
                    <th><a class="btn btn-primary" href="/back-aboutDescription">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">About Project</th>
                    <th><a class="btn btn-primary" href="/back-aboutProject">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">About Progress</th>
                    <th><a class="btn btn-primary" href="/back-aboutProgress">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">Resume Title</th>
                    <th><a class="btn btn-primary" href="/back-resumeTitle">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">Resume Sumary Content</th>
                    <th><a class="btn btn-primary" href="/back-resumeSumaryContent">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">Resume First Job</th>
                    <th><a class="btn btn-primary" href="/back-resumeFirstJob">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">Resume Second Job</th>
                    <th><a class="btn btn-primary" href="/back-resumeSecondJob">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">Strong Card</th>
                    <th><a class="btn btn-primary" href="/back-strongCard">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">Portfolio Gallery</th>
                    <th><a class="btn btn-primary" href="/back-portfolioGallery">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">Contact Title</th>
                    <th><a class="btn btn-primary" href="/back-contactTitle">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">Contact Social Link</th>
                    <th><a class="btn btn-primary" href="/back-contactSocialLink">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">Contact Mail Link</th>
                    <th><a class="btn btn-primary" href="/back-contactEmailLink">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">Contact Call Link</th>
                    <th><a class="btn btn-primary" href="/back-contactCallLink">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">Footer Link</th>
                    <th><a class="btn btn-primary" href="/back-footerLink">Show</a></th>
                </tr>
                <tr>
                    <th scope="row">Footer Copyright</th>
                    <th><a class="btn btn-primary" href="/back-footerCopyright">Show</a></th>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
