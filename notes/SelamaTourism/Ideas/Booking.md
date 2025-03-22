To handle navigation between steps properly, you should use **session management and route handling**. This ensures users cannot skip steps but can **go back** or **jump to previous steps** if needed.

---

### **✅ Approach for Your 4-Step Booking Wizard**

1. **Step 1:** Select **Date** (`step1.php`)
2. **Step 2:** Enter **People Details** (`step2.php`)
3. **Step 3:** Select **Insurance** (`step3.php`)
4. **Step 4:** **Status / Confirmation Page** (`step4.php`)

---

## **🔹 Setting Up Route-Based Navigation**

Instead of allowing users to access any page freely, control navigation using a **session variable** that tracks their progress.

```php
session_start();

$current_step = isset($_SESSION['current_step']) ? $_SESSION['current_step'] : 1;

// Restrict users from skipping steps
if ($current_step < 1) {
    $_SESSION['current_step'] = 1;
    header("Location: step1.php");
    exit();
}
if ($current_step < 2 && basename($_SERVER['PHP_SELF']) == "step2.php") {
    header("Location: step1.php");
    exit();
}
if ($current_step < 3 && basename($_SERVER['PHP_SELF']) == "step3.php") {
    header("Location: step2.php");
    exit();
}
if ($current_step < 4 && basename($_SERVER['PHP_SELF']) == "step4.php") {
    header("Location: step3.php");
    exit();
}
```

### **✅ Allow Users to Move Between Steps**

Each step should **update the session** to allow progression.

#### **Step 1: Select Date (`step1.php`)**

```php
<?php 
session_start();
$_SESSION['current_step'] = 1; // Reset progress

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['booking_date'] = $_POST['booking_date'];
    $_SESSION['current_step'] = 2; // Allow next step
    header("Location: step2.php");
    exit();
}
?>

<form action="" method="POST">
    <input type="date" name="booking_date" required>
    <button type="submit">Next</button>
</form>
```

---

#### **Step 2: People Details (`step2.php`)**

```php
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['people_count'] = $_POST['people_count'];
    $_SESSION['current_step'] = 3; // Allow next step
    header("Location: step3.php");
    exit();
}
?>

<form action="" method="POST">
    <input type="number" name="people_count" required>
    <button type="submit">Next</button>
</form>

<form action="step1.php" method="POST">
    <button type="submit">Back</button>
</form>
```

---

#### **Step 3: Insurance (`step3.php`)**

```php
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['insurance'] = $_POST['insurance'];
    $_SESSION['current_step'] = 4; // Allow next step
    header("Location: step4.php");
    exit();
}
?>

<form action="" method="POST">
    <select name="insurance" required>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
    <button type="submit">Next</button>
</form>

<form action="step2.php" method="POST">
    <button type="submit">Back</button>
</form>
```

---

#### **Step 4: Status / Confirmation (`step4.php`)**

```php
<?php
session_start();
?>

<h2>Booking Summary</h2>
<p>Date: <?php echo $_SESSION['booking_date']; ?></p>
<p>People: <?php echo $_SESSION['people_count']; ?></p>
<p>Insurance: <?php echo $_SESSION['insurance']; ?></p>

<form action="step3.php" method="POST">
    <button type="submit">Back</button>
</form>
```

---

## **✅ How Routing Works**

- If users try to **jump to a later step**, they get redirected to the earliest unlocked step.
- Users can **go back** to change details.
- Each step updates `$_SESSION['current_step']`, controlling **where users can go next**.

### **✅ Advanced Enhancement**

Instead of separate `stepX.php` files, you can use a single **`booking.php?step=1`** format and load the correct form dynamically.

---

### **✅ Summary**

✔ Prevents users from **skipping steps**  
✔ Allows users to **go back & modify data**  
✔ Uses **session tracking** for smooth navigation 🚀