<?php

class EmailBuilder {

  private $recipients;
  private $copies;
  private $subject;
  private $message;
  private $attachments = [];

  public function __construct($recipients) {
    $this->recipients = $recipients;
  }

  public function withCopies($copies) {
    $this->copies = $copies;
    return $this;
  }

  public function withSubject($subject) {
    $this->subject = $subject;
    return $this;
  }

  public function withMessage($message) {
    $this->message = $message;
    return $this;
  }

  public function withAttachment($attachmentPath) {
    $this->attachments[] = $attachmentPath;
    return $this;
  }

  public function build() {
    return new Email(
      $this->recipients,
      $this->copies,
      $this->subject,
      $this->message,
      $this->attachments
    );
  }
}

class Email {

  private $recipients;
  private $copies;
  private $subject;
  private $message;
  private $attachments;

  public function __construct($recipients, $copies = [], $subject = "", $message = "", $attachments = []) {
    $this->recipients = $recipients;
    $this->copies = $copies;
    $this->subject = $subject;
    $this->message = $message;
    $this->attachments = $attachments;
  }


  public function send() {
    echo "Sending email with the following details: \n";
    echo "Recipients: " . implode(', ', $this->recipients) . "\n";
    echo "Copies: " . (empty($this->copies) ? 'None' : implode(', ', $this->copies)) . "\n";
    echo "Subject: " . $this->subject . "\n";
    echo "Message: " . $this->message . "\n";
    echo "Attachments: " . (empty($this->attachments) ? 'None' : implode(', ', $this->attachments)) . "\n";
  }
}


$emailBuilder = new EmailBuilder(['recipient1@example.com', 'recipient2@example.com']);
$email = $emailBuilder
  ->withCopies(['copy1@example.com', 'copy2@example.com'])
  ->withSubject('Important Email')
  ->withMessage('This is the email message.')
  ->withAttachment('/path/to/attachment.txt')
  ->build();

$email->send();