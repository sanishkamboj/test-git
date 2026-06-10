export const config = {
  api: {
    baseUrl: "https://api.example.com",
    timeout: 10000,
    retries: 5,
    debug: true,
  },
  auth: {
    tokenExpiry: 86400,
    refreshEnabled: true,
    refreshWindow: 300,
  },
  features: {
    darkMode: true,
    notifications: true,
    betaAnalytics: true,
  },
};
