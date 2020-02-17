# Sales Pop GraphQL

## How to install
Run the following command in Magento 2 root folder:

```
composer require mageplaza/module-sales-pop-graphql
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

## How to use

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
