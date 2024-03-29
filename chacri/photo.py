from lxml import etree
import re
import pyperclip


text = '<figure class="wp-block-image size-large is-resized"><img src="http://lamobdechacri.fr/wp-content/uploads/2024/01/f2a13e4b-93d8-4d28-9709-6d5b1a4698d4-1024x768.jpg" alt="" class="wp-image-1260" style="width:469px;height:auto"/></figure>'
base = etree.fromstring(text)
bool_caption = False

if (len(base) == 2):
	bool_caption=True
	figcaption=base[1]
	


fig = base[0]
src = fig.get('src')
temp_a = etree.Element("a")
temp_a.set('href',re.sub("(.+uploads/.+)-.*\\.jpg", "\\1.jpg", src))
temp_a.set('data-width','2000')
temp_a.set('data-heigth','1500')
temp_a.set('data-rel','lightbox')
temp_a.append(fig)

if bool_caption:
	temp_a.append(figcaption)

base.append(temp_a)
result = etree.tostring(base).decode("utf-8")

print(result)
pyperclip.copy(result)



# <a href="http://lamobdechacri.fr/wp-content/uploads/2023/12/IMG_5586.jpg" data-width="2000" data-heigth="1500" data-rel="lightbox">





# <a href="http://lamobdechacri.fr/wp-content/uploads/2023/12/IMG_5586.jpg" data-width="2000" data-heigth="1500" data-rel="lightbox">

# </a></figure>

# <figure class="wp-block-image size-large">
# <a href="http://lamobdechacri.fr/wp-content/uploads/2023/12/IMG_5754.jpg" data-width="2000" data-heigth="1500" data-rel="lightbox">
# <img src="http://lamobdechacri.fr/wp-content/uploads/2023/12/IMG_5754-768x1024.jpg" alt="" class="wp-image-1216"/></a></figure>