export const analyticsCards = {
  volume: {
    metric: "automated-requests",
    window: "realtime",
    message: "Right branch counts requests handled by automation.",
  },

  quality: {
    metric: "model-reviews",
    window: "realtime",
    message: "Right branch tracks model reviews and confidence scores.",
  },

  response: {
    metric: "generated-responses",
    window: "realtime",
    message: "Right branch measures generated customer responses.",
  },
};
