<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رسالة جديدة من نموذج الاتصال</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            direction: rtl;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #a2c5e9;
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }
        .logo {
            max-height: 80px;
            margin-bottom: 10px;
        }
        .content {
            padding: 30px;
        }
        .message-details {
            background-color: #f8f9fa;
            border-radius: 6px;
            padding: 20px;
            margin-top: 20px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
            border-top: 1px solid #eee;
            font-size: 12px;
            color: #777;
        }
        h2 {
            color: #2c3e50;
            margin-top: 0;
        }
        .separator {
            height: 1px;
            background-color: #eee;
            margin: 15px 0;
        }
        .label {
            font-weight: bold;
            color: #2c3e50;
        }
        .message-text {
            white-space: pre-line;
            background-color: #ffffff;
            border: 1px solid #eaeaea;
            border-radius: 4px;
            padding: 15px;
            margin-top: 5px;
        }
    </style>
</head>
<body dir="rtl">
    <div class="container">
        <div class="header">
            <img src="{{ asset('img/logo.png') }}" alt="شعار الموقع" class="logo">
            <h2>رسالة جديدة من نموذج الاتصال</h2>
        </div>
        
        <div class="content">
            <p>لقد تلقيت رسالة جديدة من خلال نموذج الاتصال في موقعك.</p>
            
            <div class="message-details">
                <p><span class="label">الاسم:</span> {{ $data['name'] }}</p>
                <p><span class="label">البريد الإلكتروني:</span> {{ $data['email'] }}</p>
                <p><span class="label">رقم الجوال:</span> {{ $data['phone'] }}</p>
                
                <div class="separator"></div>
                
                <p><span class="label">الموضوع:</span> {{ $data['subject'] }}</p>
                <p><span class="label">الرسالة:</span></p>
                <div class="message-text">{{ $data['message'] }}</div>
            </div>
        </div>
        
        <div class="footer">
            <p>هذه رسالة آلية، يرجى عدم الرد عليها</p>
            <p>&copy; {{ date('Y') }} جميع الحقوق محفوظة</p>
        </div>
    </div>
</body>
</html>