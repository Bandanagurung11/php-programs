<? xml version="1.0" ?>
<!DOCTYPE example [
  <!ELEMENT example (title, content)>
  <!ELEMENT title (#PCDATA)>
  <!ELEMENT content (#PCDATA)>
  <!ATTLIST example type CDATA #REQUIRED>
]>
<example type="article">
  <title>Example Title</title>
  <content>This is an example of an XML document with a DTD and an attribute.</content>
</example>