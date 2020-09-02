from docxtpl import DocxTemplate
doc = DocxTemplate("11.docx")
TEXT =  {
    'flags': {'1',
              '2',
              '3',
              '4'},
    'name':'aaaa'
}

doc.render(TEXT)
doc.save("generated_doc.docx")
