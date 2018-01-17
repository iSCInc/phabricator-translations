<?php

final class PhabricatorLegalpadEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'All Signatures' => 'All Signatures',
      'Unverified Email' => 'Unverified Email',
      'Browse Documents' => 'Browse Documents',
      'Create New Document' => 'Create New Document',
      'Type of signature required' => 'Type of signature required',
      'Signed At' => 'Signed At',
      'Signature Type' => 'Signature Type',
      '%s updated the document signature type.' => '%s updated the document signature type.',
      '%s set the document %s to require signatures.' => '%s set the document %s to require signatures.',
      'I agree to the terms laid forth above.' => 'I agree to the terms laid forth above.',
      'Signature Details' => 'Signature Details',
      'Email Commands: Legalpad Documents' => 'Email Commands: Legalpad Documents',
      '%s added %s required legal document(s): %s.' => '%s added %s required legal document(s): %s.',
      'That user does not exist.' => 'That user does not exist.',
      'Company name is required.' => 'Company name is required.',
      'Legalpad Document' => 'Legalpad Document',
      '%s edited %s required legal document(s), added %s: %s; removed %s: %s.' => '%s edited %s required legal document(s), added %s: %s; removed %s: %s.',
      'Document Title.' => 'Document Title.',
      'A valid email is required.' => 'A valid email is required.',
      'Configure Legalpad.' => 'Configure Legalpad.',
      'Unable to Verify Signature' => 'Unable to Verify Signature',
      'Contact Email' => 'Contact Email',
      'Document Body' => 'Document Body',
      'Contact name is required.' => 'Contact name is required.',
      'No signatures match the query.' => 'No signatures match the query.',
      'Type a document name...' => 'Type a document name...',
      'Interacting with Legalpad Documents' => 'Interacting with Legalpad Documents',
      '%s updated the document text.' => '%s updated the document text.',
      'Signed on %s' => 'Signed on %s',
      '%s renamed this document from %s to %s.' => '%s renamed this document from %s to %s.',
      'The body of text of the document.' => 'The body of text of the document.',
      'Not Signed' => 'Not Signed',
      '%s document(s) are already signed: %s.' => '%s document(s) are already signed: %s.',
      'You must choose a company to add an exemption for.' => 'You must choose a company to add an exemption for.',
      '%s set the document %s to not require signatures.' => '%s set the document %s to not require signatures.',
      '%s edited %s required legal document(s) for %s, added %s: %s; removed %s: %s.' => '%s edited %s required legal document(s) for %s, added %s: %s; removed %s: %s.',
      'Email Contains' => 'Email Contains',
      'Signature Already Verified' => 'Signature Already Verified',
      'You do not have permission to create new documents.' => 'You do not have permission to create new documents.',
      '%s:
    This email address was used to sign a Legalpad document in Phabricator:
      %s
    Please verify you own this email address and accept the agreement by clicking this link:
      %s
    Your signature is not valid until you complete this verification step.
    You can review the document here:
      %s
    ' => '%s:
    This email address was used to sign a Legalpad document in Phabricator:
      %s
    Please verify you own this email address and accept the agreement by clicking this link:
      %s
    Your signature is not valid until you complete this verification step.
    You can review the document here:
      %s
    ',
      'This document has an unknown signature type ("%s").' => 'This document has an unknown signature type ("%s").',
      'Legalpad Documents' => 'Legalpad Documents',
      'Legalpad Signatures' => 'Legalpad Signatures',
      'You signed this document on %s.' => 'You signed this document on %s.',
      'Thank you for signing this document. Please check your email to verify your signature and complete the process.' => 'Thank you for signing this document. Please check your email to verify your signature and complete the process.',
      'Create documents and track signatures. Can also be re-used in other areas of Phabricator, like CLAs.' => 'Create documents and track signatures. Can also be re-used in other areas of Phabricator, like CLAs.',
      'Last Updated' => 'Last Updated',
      'This document requires a corporate signatory. You must log in to accept this document on behalf of a company you represent.' => 'This document requires a corporate signatory. You must log in to accept this document on behalf of a company you represent.',
      'Not Signable' => 'Not Signable',
      'Signed' => 'Signed',
      'The signature is now verified.' => 'The signature is now verified.',
      'Notes' => 'Notes',
      'Legalpad' => 'Legalpad',
      'View/Sign Document' => 'View/Sign Document',
      'Only documents with signature type "individual" may require signing to use Phabricator.' => 'Only documents with signature type "individual" may require signing to use Phabricator.',
      'Mail receiver is not a LegalpadDocument!' => 'Mail receiver is not a LegalpadDocument!',
      'You must choose a user to exempt.' => 'You must choose a user to exempt.',
      'Only admins may require signature.' => 'Only admins may require signature.',
      'You have already signed this document!' => 'You have already signed this document!',
      'Verify Signature' => 'Verify Signature',
      'Signed Documents' => 'Signed Documents',
      'Show only documents I have signed.' => 'Show only documents I have signed.',
      'This signature has already been verified.' => 'This signature has already been verified.',
      'Please verify this document signature.' => 'Please verify this document signature.',
      'Create a Document' => 'Create a Document',
      'You can record a signature exemption if a user has signed an equivalent document. Other applications will behave as through the user has signed this document.' => 'You can record a signature exemption if a user has signed an equivalent document. Other applications will behave as through the user has signed this document.',
      'Company Name' => 'Company Name',
      '%s updated the document text for %s.' => '%s updated the document text for %s.',
      '%s added %s required legal document(s) to %s: %s.' => '%s added %s required legal document(s) to %s: %s.',
      'Email field is required.' => 'Email field is required.',
      'Exempt User' => 'Exempt User',
      'Company address is required.' => 'Company address is required.',
      'Contact Name' => 'Contact Name',
      'DOCUMENT' => 'DOCUMENT',
      'Require document signatures: %s.' => 'Require document signatures: %s.',
      'Updated By' => 'Updated By',
      'The email address specified is associated with an account. Please login to that account and sign this document again.' => 'The email address specified is associated with an account. Please login to that account and sign this document again.',
      '%s updated the document preamble.' => '%s updated the document preamble.',
      'Corporations' => 'Corporations',
      'Verified, Corporate' => 'Verified, Corporate',
      '%s removed %s required legal document(s): %s.' => '%s removed %s required legal document(s): %s.',
      '%s set the document text.' => '%s set the document text.',
      'You must check "I agree to the terms laid forth above."' => 'You must check "I agree to the terms laid forth above."',
      '[Legalpad] Signature Verification' => '[Legalpad] Signature Verification',
      'This page documents the commands you can use to interact with documents in Legalpad.' => 'This page documents the commands you can use to interact with documents in Legalpad.',
      'Add Signature Exemption' => 'Add Signature Exemption',
      'No Signature Required' => 'No Signature Required',
      'Add Exemption' => 'Add Exemption',
      'The author of a document can always view and edit it.' => 'The author of a document can always view and edit it.',
      'Can Create Documents' => 'Can Create Documents',
      '%s removed %s required legal document(s) from %s: %s.' => '%s removed %s required legal document(s) from %s: %s.',
      'Contributors' => 'Contributors',
      'The preamble of the document.' => 'The preamble of the document.',
      '%s set the document to require signatures.' => '%s set the document to require signatures.',
      'Individuals' => 'Individuals',
      'Signature Required to use Phabricator' => 'Signature Required to use Phabricator',
      'New document title.' => 'New document title.',
      'Configure creation and editing documents in Legalpad.' => 'Configure creation and editing documents in Legalpad.',
      'Signature Verified' => 'Signature Verified',
      'NOTE: You can only see your own signatures and signatures on documents you have permission to edit.' => 'NOTE: You can only see your own signatures and signatures on documents you have permission to edit.',
      '%s updated the document preamble for %s.' => '%s updated the document preamble for %s.',
      'Legalpad User Guide' => 'Legalpad User Guide',
      '%s set the document to not require signatures.' => '%s set the document to not require signatures.',
      'You can not sign a document on behalf of a corporation unless you are logged in.' => 'You can not sign a document on behalf of a corporation unless you are logged in.',
      'Exemption By' => 'Exemption By',
      'Who Should Sign?' => 'Who Should Sign?',
      'Name field is required.' => 'Name field is required.',
      'You do not need to sign this document. %s added a signature exemption for you on %s.' => 'You do not need to sign this document. %s added a signature exemption for you on %s.',
      'New document preamble.' => 'New document preamble.',
      'Find Signatures' => 'Find Signatures',
      'Required %s signature(s): %s.' => 'Required %s signature(s): %s.',
      'Configure Legalpad Forms' => 'Configure Legalpad Forms',
      'The signature verification code is incorrect, or the signature has been invalidated. Make sure you followed the link in the email correctly.' => 'The signature verification code is incorrect, or the signature has been invalidated. Make sure you followed the link in the email correctly.',
      'Agreements and Signatures' => 'Agreements and Signatures',
      '%s updated the document signature type for %s.' => '%s updated the document signature type for %s.',
      'Required Signature' => 'Required Signature',
      'Verify Signature?' => 'Verify Signature?',
      'signers of legalpad documents' => 'signers of legalpad documents',
      'Company Address' => 'Company Address',
      'CHANGES TO DOCUMENT PREAMBLE' => 'CHANGES TO DOCUMENT PREAMBLE',
      '**Legalpad** is a simple application for tracking signatures and legal agreements. At the moment, it is primarily intended to help open source projects keep track of Contributor License Agreements.' => '**Legalpad** is a simple application for tracking signatures and legal agreements. At the moment, it is primarily intended to help open source projects keep track of Contributor License Agreements.',
      'Unknown field: %s' => 'Unknown field: %s',
      'New document body.' => 'New document body.',
      'Marks this document as required signing.' => 'Marks this document as required signing.',
      'Signers' => 'Signers',
      'Signatures' => 'Signatures',
      'Exemption' => 'Exemption',
      'View Signatures' => 'View Signatures',
      'Signed Older Version' => 'Signed Older Version',
      'CHANGES TO DOCUMENT TEXT' => 'CHANGES TO DOCUMENT TEXT',
      'Version %d (%s)' => 'Version %s (%s)',
      'You have not signed this document yet.' => 'You have not signed this document yet.',
      'Require signatures' => 'Require signatures',
      'Contact email is required.' => 'Contact email is required.',
      'Agree and Sign Document' => 'Agree and Sign Document',
      'Already Signed' => 'Already Signed',
      'Verified, Current' => 'Verified, Current',
      'Signing User' => 'Signing User',
      'That user has already signed this document.' => 'That user has already signed this document.',
      'Subject prefix for Legalpad email.' => 'Subject prefix for Legalpad email.',
      'New document signature type.' => 'New document signature type.',
      'Sign Document' => 'Sign Document',
    );
  }

}
