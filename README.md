# Currency Converter

Currency Converter is a simple PHP web application that turns Euro amounts into any other currency, using the European Central Bank's daily exchange rate data.

## Features

- Real-time currency conversion using ECB's exchange rates
- An intuitive, clean user interface
- Mobile-responsive design

## Installation

1. Clone this repository:

```git clone https://github.com/jdauh/CurrencyConverter.git```

2. Navigate to the project directory:

```cd CurrencyConverter```

3. You can run the project on your local server.

## Hosting on Clever Cloud

You can effortlessly host this application on [Clever Cloud](https://www.clever-cloud.com).  It doesn't require any additional code for deployment.

1. Create a PHP application using [clever-tools](https://github.com/CleverCloud/clever-tools) and set `/public` as the web root:

```
clever create -t php CurrencyConverter
clever env set CC_WEBROOT /public
```

2. Deploy the code on Clever Cloud: 

```clever deploy```

3. Browse the app:

```clever open```

With [clever-tools](https://github.com/CleverCloud/clever-tools) you can bind a domain (`clever domains add domain.tld`), stop/restart the application (`clever stop`, `clever restart`), change its scaling (`clever scale`), etc. 

You can also manage your app through our wonderful, user-friendly [Console](https://console.clever-cloud.com) !

## Usage

1. Enter an amount in euros.
2. Enter the desired target currency (e.g., 'USD', 'GBP', 'JPY').
3. Click "Convert" to see the converted amount in the selected currency and the conversion rate used.

## License

This project is open source and available under the [MIT License](LICENSE).
