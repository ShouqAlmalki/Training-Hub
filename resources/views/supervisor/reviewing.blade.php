@extends('layouts.app')

@section('title', 'Messaging')
@section('content')
<br><br>
<title>Messages and Announcements</title>
<style>
    .container {
        display: flex;
        justify-content: flex-start; /* Align items to the left */
        align-items: flex-start;
        gap: 20px;
        min-height: 100vh;
    }

    .box {
        width: 1500px; /* توسعنا المربع ليصبح عرضه أكبر من 1400px */
        height: 600px; /* يمكن تعديل الارتفاع حسب الحاجة */
        background-color: lightblue;
        border: 2px black solid;
        padding: 10px;
        text-align: left; /* Align content to the left */
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        margin-bottom: 30px; /* إضافة المسافة بين المربع والجدول */
    }

    .box h1 {
        margin-top: 0;
    }

    .select-container {
        width: 100%;
        display: flex;
        justify-content: flex-end; /* محاذاة المحتوى إلى اليمين */
        margin-top: -57px; /* رفع مربع الاختيار من الأعلى */
        gap: 10px; /* المسافة بين العنصرين */
        align-items: center; /* محاذاة العناصر في الوسط */
    }

    /* جعل مربع البحث وخانة الاختيار في نفس الارتفاع */
    .form-select, .search-input {
        height: 40px; /* نفس الارتفاع لكلا العنصرين */
    }

    /* تكبير عرض مربع البحث */
    .search-input {
        width: 79%; /* جعل عرض مربع البحث أكبر ليأخذ 75% من المساحة */
    }

    /* تصغير عرض خانة الاختيار */
    select.form-select {
        width: 20%; /* جعل عرض خانة الاختيار 20% */
    }
    .message-footer {
        font-size: 12px;
        color: black;
        margin-top: 2px;
    }

    .input-container {
        margin-top: 20px;
    }

    .table tbody tr:first-child {
        background-color: #f2f2f2; /* Light Gray for the first row */
    }

    /* تنسيق الأسهم داخل الجدول */
    .table .pagination {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }

    .table .pagination button {
        background-color: #f1f1f1;
        border: 1px solid #ddd;
        padding: 5px 8px;
        cursor: pointer;
        border-radius: 50%;
        font-size: 12px;
    }

    .table .pagination button:hover {
        background-color: #dddddd5a;
    }

    .table {
        margin-top: 20px; /* إضافة المسافة بين الجدول والمحتوى الموجود في الأعلى */
    }
</style>

<div class="container">
    <div class="box">
        <h1 style="color: #006392;">Table of Documents </h1>
        <div class="mb-3">
            <!-- Apply the 'search-input' class to the input element to adjust its size -->
            <input type="text" class="form-control search-input" id="Input" placeholder="Search Table">
        </div>
        <div class="select-container">
            <select class="form-select" aria-label="Default select example">
                <option selected>select section</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <table class="table">
            
            <thead>
                <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col"></th>
                    <th scope="col">Reports</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Full Name</th>
                    <td></td>
                    <td>Reports</td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Full Name</th>
                    <td></td>
                    <td>Reports</td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Full Name</th>
                    <td></td>
                    <td>Reports</td>
                    <td></td>
                </tr>
                <!-- الصف الأخير لإضافة الأسهم -->
                <tr>
                    <td colspan="3"></td>
                    <td>
                        <div class="pagination">
                            <button>←</button>
                            <button>→</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
