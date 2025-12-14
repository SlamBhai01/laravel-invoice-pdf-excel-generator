# Laravel Invoice PDF & Excel Generator

This project demonstrates how to generate **Invoice PDF and Excel files directly from custom JSON data** using **Laravel 12** and **Blade templates**.

The main goal of this project is to show how JSON data can be passed to Blade views and then used to generate **PDF and Excel downloads** without storing files on the server.

---

## 🔹 Project Overview

* Custom JSON data is used as the **single source of data**
* JSON data is passed from **Controller to Blade**
* Blade is used to design the **invoice layout**
* Invoice can be downloaded as:

  * 📄 **PDF**
  * 📊 **Excel (.xls)**
* Supports **Urdu & English language**
* Files are **generated and downloaded directly** (not stored on server)

---

## 🔹 Technologies Used

* Laravel 12
* PHP 8+
* Blade Templates
* TCPDF (for PDF generation)
* HTML Table → Excel (.xls)
* UTF-8 with BOM (for Urdu language support)

---

## 🔹 Features

* ✅ PDF invoice generation from JSON
* ✅ Excel invoice generation from JSON
* ✅ Urdu language support in PDF and Excel
* ✅ No database required
* ✅ No Excel library used
* ✅ Fast & lightweight solution
* ✅ Simple and easy to understand logic

---

## 🔹 How It Works (Simple Flow)

### PDF Generation

1. Custom JSON file is loaded from storage
2. Data is decoded in Controller
3. Blade view receives data
4. TCPDF converts Blade HTML into PDF
5. PDF is **directly downloaded**

### Excel Generation

1. Custom JSON data is prepared in Controller
2. Data is passed to Blade table view
3. Blade HTML table is converted into `.xls`
4. UTF-8 BOM is added for Urdu support
5. Excel file is **directly downloaded**

---

## 🔹 No File Storage

* PDF and Excel files are **not saved** in any folder
* Files are generated **on runtime**
* Browser download is used
* This approach keeps the project **clean and simple**

> File storage can be added later as an enhancement if required.

---

## 🔹 Example JSON Structure

```json
{
  "invoice_title": "انوائس",
  "customer_name": "علی احمد",
  "business_name": "عبدالاسلام",
  "items": [
    {
      "name": "آئٹم 1",
      "desp": "ڈسکرپشن 1",
      "qty": 2,
      "rate": 500
    }
  ],
  "discount": 20,
  "tax_rate": 5
}
```

---

## 🔹 Routes Used

* `/invoicejson-pdf` → Download Invoice PDF
* `/invoice-excel` → Download Invoice Excel

---

## 🔹 Why This Approach?

* No heavy Excel libraries
* No storage permission issues
* Faster execution
* Easy for students and beginners
* Ideal for assignments and demos

---

## 🔹 Future Enhancements

* Save PDF & Excel files in storage
* Download history
* Database integration
* Multiple invoice templates

---

## 🔹 License

This project is open-source and free to use for learning and educational purposes.
