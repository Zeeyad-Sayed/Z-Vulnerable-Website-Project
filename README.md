# Z-Vulnerable-Website-Project (ZVP)

## Introduction
ZVP for short is a project where I try to simulate real-world web vulnerabilities like Cross-Site Scripting (XSS), File Inclusion, and OS Command Injection. This project is designed for educational purposes and aims to help users practice web security testing techniques.

### Features:
- **Cross-Site Scripting (XSS)**
- **File Inclusion (LFI/RFI)**
- **OS Command Injection**
- Dockerized environment for easy setup and use.

## Setup Instructions

1. Clone the repository:
    ```bash
    git clone https://github.com/Zeeyad-Sayed/Z-Vulnerable-Website-Project.git
    ```
2. Navigate to the project directory:
    ```bash
    cd Z-Vulnerable-Website-Project
    ```
3. Build the Docker image:
    ```bash
    docker build -t vulnerable-website .
    ```
4. Run the Docker container:
    ```bash
    docker run -d -p 8080:80 vulnerable-website
    ```

5. Access the application in your browser:
   - Open `http://localhost:8080` to view the vulnerable web pages.

## Vulnerabilities Included:
1. **Cross-Site Scripting (XSS):**
   - Found on the `/xss.php` page, allows injecting malicious scripts into input fields.

2. **File Inclusion:**
   - Located on `/file_inclusion.php`, allows LFI and RFI attacks by including files from the server or remote locations.

3. **OS Command Injection:**
   - Present on `/os_injection.php`, allowing the execution of arbitrary system commands through user input.

## Legal Disclaimer
This project is for **educational purposes** only. Any testing or exploitation of systems without prior authorization is illegal.

## Contribution
Feel free to create issues or submit pull requests to improve the project!

