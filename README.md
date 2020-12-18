# Magento 2 Sales Pop GraphQL / PWA (FREE)

**Magento 2 Sales Pop GraphQL is a part of Mageplaza Sales Pop extension that adds GraphQL features.** This highly supports PWA compatibility.

[Mageplaza Sales Pop for Magento 2](https://www.mageplaza.com/magento-2-sales-pop/) enables online stores to show customers' real-time purchases as an effective way to market the products and stimulate customers' purchasing decisions.

Customers will consider a lot of factors before purchasing a product from an online store. That sales pop shows the stores' continuous purchases will somehow eliminate the doubt in customers' minds about the store and make them feel safer to make payment. The real-time number of sales displays is an effective and cost-saving way to market the products.

Mageplaza Sales Pop extension supports multiple types of pop-up that enables you to diversify the display of sales pops on your store. They appear friendly and automatically in the store and draw customers' attention without bombarding them countless times. In particular, there are three proven types that help increase sales incredibly, they are: 

- Notifications of recent orders: It shows the recent products bought in the store. 
- Checkout pop-ups: It shows the current total checkouts. 
- Upsell pop-ups: It shows the products that are bought together. 

The store admin can set up the rules to display pop-ups. The products or orders that match the rule will be displayed at the frontend. There are three types of conditions: 

- Follow cart price rules: The store admin sets the rules based on cart attributes, product attributes, etc. 
- Restrict the number of recent orders displaying at the frontend. 
- Set the amount of time to check recent orders 

The data will be extracted, updated automatically, and displayed correspondingly at the frontend. 

Mageplaza Sales Pop supports sales pop-ups on multiple pages, including CMS page, category pages, product pages, shopping cart page, and checkout page. You can configure sales pops to display on the pages corresponding to the customers’ journey from end to end. This will build up customers’ trust gradually and boost their purchase decision effectively. 

You can customize the sales pop design and content easily with an HTML-supported and friendly message formula from the admin backend. You can change the background image of the popup, the border, text, link and hover link color easily to match your store theme. 

The extension supports A/B testing. One child popup will be created and run along with the parent popup so that you can continue to keep track of both and measure which one is more effective. In addition, another comprehensive report will let you know how your sales popups are performing, the good, the bad, and the uly of all sales pops will be revealed through the number of views, clicks, and closes to make the comparison more accurately. 

## 1. How to install
Run the following command in Magento 2 root folder:

```
composer require mageplaza/module-sales-pop-graphql
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```
**Note:**
Magento Sales Pop GraphQL requires installing [Mageplaza Sales Pop](https://www.mageplaza.com/magento-2-sales-pop/) in your Magento installation. 

## 2. How to use

To start working with Sales Pop GraphQl in Magento, please do the following requirements:

- Use Magento 2.3.x. Reture your site to developer mode.
- Install chrome extension (currently does not support other browsers)
- Set GraphQL endpoint as `http://<magento2-3-server>/graphql` in url box, click **Set endpoint**. 
(e.g. http://develop.mageplaza.com/graphql/ce232/graphql)
- Mageplaza-supported queries are fully written in the **Description** section of `Query.SalesPop.items`
- To get the popup information by id, enter the id of the necessary popup in the array ids []

![](https://i.imgur.com/DVq9oky.png)

- To get the information of all popups quickly, leave the ids[ array empty. 

![](https://i.imgur.com/33cnSY6.png)

## 3. Devdocs
- [Magento 2 Sales Pop API & examples](https://documenter.getpostman.com/view/5977924/SWE2A1Dd?version=latest)

Click on Run in Postman to add these collections to your workspace quickly. 

![Magento 2 blog graphql pwa](https://i.imgur.com/lhsXlUR.gif)

## 4. Contribute to this module 
Feel free to **Fork** and contribute to this module. 

You can create a pull request, and we will consider to merge your proposed changes in the main branch. 

## 5. Get support 
- Contact us if you have any question. We're please to hear from you. 
- If you find this post helpful, please give us a **Star** ![star](https://i.imgur.com/S8e0ctO.png)
 
