export const notificationTemplates = {
  created: {
    subject: "Request created",
    audience: "customer",
    body: "We received your request and will review it soon.",
  },
  assigned: {
    subject: "Request assigned",
    audience: "agent",
    body: "A request is ready for review.",
  },
  escalated: {
    subject: "Request escalated",
    audience: "manager",
    body: "A request needs additional attention.",
  },
  closed: {
    subject: "Request closed",
    audience: "customer",
    body: "The request is closed. Contact us if anything else is needed.",
  },
};

export function renderNotification(type, recipient) {
  const template = notificationTemplates[type];
  return `${template.subject} for ${recipient}: ${template.body}`;
}
