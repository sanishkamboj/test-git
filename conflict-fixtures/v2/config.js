export const config = {
  api: {
    baseUrl: "https://api.example.com",
    timeout: 5000,
    retries: 3,
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
